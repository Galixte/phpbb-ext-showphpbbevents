<?php
/**
* phpBB Extension - marttiphpbb templateevents
* @copyright (c) 2014 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\templateevents\util;

use marttiphpbb\templateevents\util\event_type;

class generate_template_listener
{
	const LINK_BASE = 'https://github.com/phpbb/phpbb/tree/prep-release-3.2.2/phpBB/';
	const LINK_LINE = '#L';
	const INCLUDECSS = "{%- INCLUDECSS '@marttiphpbb_templateevents/templateevents.css' -%}\n";
	const ENABLE = "{%- if marttiphpbb_templateevents.enable -%}\n%content%{%- endif -%}\n";
	const DISABLE = "{%- if not marttiphpbb_templateevents.enable -%}\n%content%{%- endif -%}\n";
	const BUTTON_HIDE = "<a class=\"templateevents-hide\" href=\"{{- marttiphpbb_templateevents.u_hide -}}\">{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_HIDE') -}}</a>\n";
	const BUTTON_SHOW = "<a class=\"templateevents-show\" href=\"{{- marttiphpbb_templateevents.u_show -}}\">{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_SHOW') -}}</a>\n";
	const EVENT_SPAN = "<span class=\"%class%\" title=\"%title%\">\n%content%</span>\n";
	const SCRIPT_NAME_CONDITION = "{%- if SCRIPT_NAME == '%script_name%' -%}\n%content%{%- endif -%}\n";
	const TITLE_NEWLINE = '&#10;';
	const THIS_FILE_INDICATOR = '*';
	const CLASS_TEMPLATE_EVENT = 'templateevents';
	const CLASS_TEMPLATE_EVENT_HEAD = 'templateevents-head';
	const EVENT_LINK = "<a href=\"%link%\">%name%</a>\n";
	const EVENT_HEAD_COMMENT = "{# Rendering of the head events is delayed until the first event in the body #}\n";
	const PHP_EVENTS = <<<'EOT'
<br>
<table class="marttiphpbb-templateevents-php">
	<thead>
		<tr>
			<th>{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_PHP_EVENT_NAME') -}}</th>
			<th>{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_PHP_EVENT_COUNT') -}}</th>
			<th>{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_SINCE') -}}</th>
			<th>{{- lang('MARTTIPHPBB_TEMPLATEEVENTS_FILENAME') -}}</th>	
		</tr>
	</thead>
	<tbody>
	{%- for name, e in marttiphpbb_templateevents.php -%}
		<tr>
			<td>{{- name -}}</td>
			<td>{{- e.count -}}</td>
			<td>{{- e.since -}}</td>
			<td>
			{%- for file, line in e.loc -%}
				{%- if line -%}
					<a href="%link_base%{{- file -}}#L{{- line -}}">
						{{- file -}}
					</a>
				{%- else -%}
					{{- file -}}
				{%- endif -%}
				{%- if not loop.last -%}<br>{%- endif -%}
			{%- endfor -%}
			</td>
		</tr>
	{%- endfor -%}
	</tbody>
</table>
EOT;

	public static function get(
		event_type $type,
		string $name,
		array $loc,
		string $since = '',
		bool $in_head = false, 
		array $delayed_head_events = [],
		bool $include_css = false,
		bool $render_button = false, 
		bool $render_php_events = false):string
	{
		$str = $include_css ? self::INCLUDECSS : '';

		if ($in_head)
		{
			return self::EVENT_HEAD_COMMENT . $str;
		}

		if ($render_button)
		{
			$str .= str_replace('%content%', self::BUTTON_HIDE, self::ENABLE);
			$str .= str_replace('%content%', self::BUTTON_SHOW, self::DISABLE);
		}

		$content = '';

		if (count($delayed_head_events))
		{
			foreach($delayed_head_events as $head_event_name => $ary)
			{
				$content .= self::get_template_event($type, $head_event_name, $ary['loc'], $ary['since'], true);
			}
		}

		$content .= self::get_template_event($type, $name, $loc, $since);

		if ($render_php_events)
		{
			$content .= str_replace('%link_base%', self::LINK_BASE, self::PHP_EVENTS);
		}

		return $str . str_replace('%content%', $content, self::ENABLE);
	}

	private static function get_template_event(
		event_type $type,
		string $name, 
		array $loc,
		string $since,
		bool $is_head_event = false):string
	{
		reset($loc);

		if (count($loc) === 1)
		{
			$link = key($loc);
			return self::get_template_event_span($type, $name, $loc, $link, $since, $is_head_event);
		}

		$str = '';

		foreach ($loc as $file => $line)
		{		
			list($script_name) = explode('_', $file);

			$content = self::get_template_event_span($type, $name, $loc, $file, $since, $is_head_event);

			$search = ['%script_name%', '%content%'];
			$replace = [$script_name, $content];

			$str .= str_replace($search, $replace, self::SCRIPT_NAME_CONDITION);
		}

		return $str;
	}

	private static function get_template_event_span(
		event_type $type,
		string $name, 
		array $loc,
		string $link,
		string $since,
		bool $is_head_event = false):string	
	{
		$files = array_keys($loc);

		if (count($loc) > 1)
		{
			foreach ($files as &$file)
			{
				if ($link === $file)
				{
					$file .= self::THIS_FILE_INDICATOR;
					break;
				}
			}
		}

		$line = $loc[$link];
		$link_base = self::LINK_BASE . $type->get_location();
		$link = $line ? $link_base . $link . self::LINK_LINE . $line : false;

		$search = ['%link%', '%name%'];
		$replace = [$link, $name];
		
		$content = $link ? str_replace($search, $replace, self::EVENT_LINK) : $name;

		$since = $since ? [$since] : [];
		$title = implode(self::TITLE_NEWLINE, array_merge($since, $files));
		$class = $is_head_event ? self::CLASS_TEMPLATE_EVENT_HEAD : self::CLASS_TEMPLATE_EVENT;

		$search = ['%class%', '%title%', '%content%'];
		$replace = [$class, $title, $content];

		return str_replace($search, $replace, self::EVENT_SPAN);
	}
}