<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
* This file was generated with the ext-showphpbbevents:generate command
*/

namespace marttiphpbb\showphpbbevents\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

class php_event_listener implements EventSubscriberInterface
{
	protected $count_ary = [];

	static public function getSubscribedEvents():array
	{
		return [
			'core.acl_clear_prefetch_after' => 'add',
			'core.acp_attachments_config_edit_add' => 'add',
			'core.acp_ban_after' => 'add',
			'core.acp_ban_before' => 'add',
			'core.acp_bbcodes_delete_after' => 'add',
			'core.acp_bbcodes_display_bbcodes' => 'add',
			'core.acp_bbcodes_display_form' => 'add',
			'core.acp_bbcodes_edit_add' => 'add',
			'core.acp_bbcodes_modify_create' => 'add',
			'core.acp_bbcodes_modify_create_after' => 'add',
			'core.acp_board_config_edit_add' => 'add',
			'core.acp_email_display' => 'add',
			'core.acp_email_modify_sql' => 'add',
			'core.acp_email_send_before' => 'add',
			'core.acp_extensions_run_action_after' => 'add',
			'core.acp_extensions_run_action_before' => 'add',
			'core.acp_help_phpbb_submit_before' => 'add',
			'core.acp_language_after_delete' => 'add',
			'core.acp_logs_info_modify_modes' => 'add',
			'core.acp_main_notice' => 'add',
			'core.acp_manage_forums_display_form' => 'add',
			'core.acp_manage_forums_initialise_data' => 'add',
			'core.acp_manage_forums_modify_forum_list' => 'add',
			'core.acp_manage_forums_move_children' => 'add',
			'core.acp_manage_forums_move_content' => 'add',
			'core.acp_manage_forums_move_content_after' => 'add',
			'core.acp_manage_forums_move_content_sql_before' => 'add',
			'core.acp_manage_forums_request_data' => 'add',
			'core.acp_manage_forums_update_data_after' => 'add',
			'core.acp_manage_forums_update_data_before' => 'add',
			'core.acp_manage_forums_validate_data' => 'add',
			'core.acp_manage_group_display_form' => 'add',
			'core.acp_manage_group_initialise_data' => 'add',
			'core.acp_manage_group_request_data' => 'add',
			'core.acp_profile_action' => 'add',
			'core.acp_profile_create_edit_after' => 'add',
			'core.acp_profile_create_edit_init' => 'add',
			'core.acp_profile_create_edit_save_before' => 'add',
			'core.acp_profile_modify_profile_row' => 'add',
			'core.acp_ranks_edit_modify_tpl_ary' => 'add',
			'core.acp_ranks_list_modify_rank_row' => 'add',
			'core.acp_ranks_save_modify_sql_ary' => 'add',
			'core.acp_storage_load' => 'add',
			'core.acp_styles_action_before' => 'add',
			'core.acp_users_avatar_sql' => 'add',
			'core.acp_users_display_overview' => 'add',
			'core.acp_users_mode_add' => 'add',
			'core.acp_users_modify_profile' => 'add',
			'core.acp_users_modify_signature_sql_ary' => 'add',
			'core.acp_users_overview_before' => 'add',
			'core.acp_users_overview_modify_data' => 'add',
			'core.acp_users_overview_run_quicktool' => 'add',
			'core.acp_users_prefs_modify_data' => 'add',
			'core.acp_users_prefs_modify_sql' => 'add',
			'core.acp_users_prefs_modify_template_data' => 'add',
			'core.acp_users_profile_modify_sql_ary' => 'add',
			'core.acp_users_profile_validate' => 'add',
			'core.add_form_key' => 'add',
			'core.add_log' => 'add',
			'core.adm_page_footer' => 'add',
			'core.adm_page_header' => 'add',
			'core.adm_page_header_after' => 'add',
			'core.append_sid' => 'add',
			'core.approve_posts_after' => 'add',
			'core.approve_topics_after' => 'add',
			'core.auth_login_session_create_before' => 'add',
			'core.auth_oauth_link_after' => 'add',
			'core.auth_oauth_login_after' => 'add',
			'core.avatar_driver_upload_delete_before' => 'add',
			'core.avatar_driver_upload_move_file_before' => 'add',
			'core.avatar_manager_avatar_delete_after' => 'add',
			'core.bbcode_cache_init_end' => 'add',
			'core.bbcode_second_pass_by_extension' => 'add',
			'core.build_config_template' => 'add',
			'core.common' => 'add',
			'core.confirm_box_ajax_before' => 'add',
			'core.decode_message_after' => 'add',
			'core.decode_message_before' => 'add',
			'core.delete_attachments_before' => 'add',
			'core.delete_attachments_collect_data_before' => 'add',
			'core.delete_attachments_from_database_after' => 'add',
			'core.delete_attachments_from_filesystem_after' => 'add',
			'core.delete_forum_content_before_query' => 'add',
			'core.delete_group_after' => 'add',
			'core.delete_log' => 'add',
			'core.delete_pm_before' => 'add',
			'core.delete_post_after' => 'add',
			'core.delete_posts_after' => 'add',
			'core.delete_posts_before' => 'add',
			'core.delete_posts_in_transaction' => 'add',
			'core.delete_posts_in_transaction_before' => 'add',
			'core.delete_topics_after_query' => 'add',
			'core.delete_topics_before_query' => 'add',
			'core.delete_user_after' => 'add',
			'core.delete_user_before' => 'add',
			'core.disapprove_posts_after' => 'add',
			'core.display_custom_bbcodes' => 'add',
			'core.display_custom_bbcodes_modify_row' => 'add',
			'core.display_custom_bbcodes_modify_sql' => 'add',
			'core.display_forums_add_template_data' => 'add',
			'core.display_forums_after' => 'add',
			'core.display_forums_before' => 'add',
			'core.display_forums_modify_category_template_vars' => 'add',
			'core.display_forums_modify_forum_rows' => 'add',
			'core.display_forums_modify_row' => 'add',
			'core.display_forums_modify_sql' => 'add',
			'core.display_forums_modify_template_vars' => 'add',
			'core.display_user_activity_modify_actives' => 'add',
			'core.download_file_send_to_browser_before' => 'add',
			'core.exit_handler' => 'add',
			'core.faq_mode_validation' => 'add',
			'core.feed_base_modify_item_sql' => 'add',
			'core.feed_modify_feed_row' => 'add',
			'core.functions.redirect' => 'add',
			'core.garbage_collection' => 'add',
			'core.gen_sort_selects_after' => 'add',
			'core.generate_forum_nav' => 'add',
			'core.generate_profile_fields_template_data' => 'add',
			'core.generate_profile_fields_template_data_before' => 'add',
			'core.generate_profile_fields_template_headlines' => 'add',
			'core.generate_smilies_after' => 'add',
			'core.generate_smilies_before' => 'add',
			'core.generate_smilies_count_sql_before' => 'add',
			'core.generate_smilies_modify_rowset' => 'add',
			'core.get_avatar_after' => 'add',
			'core.get_forum_list_modify_data' => 'add',
			'core.get_gravatar_url_after' => 'add',
			'core.get_group_rank_after' => 'add',
			'core.get_group_rank_before' => 'add',
			'core.get_logs_after' => 'add',
			'core.get_logs_get_additional_data' => 'add',
			'core.get_logs_main_query_before' => 'add',
			'core.get_logs_modify_entry_data' => 'add',
			'core.get_logs_modify_type' => 'add',
			'core.get_unread_topics_modify_sql' => 'add',
			'core.get_user_rank_after' => 'add',
			'core.grab_profile_fields_data' => 'add',
			'core.group_add_user_after' => 'add',
			'core.group_delete_user_after' => 'add',
			'core.group_delete_user_before' => 'add',
			'core.handle_post_delete_conditions' => 'add',
			'core.help_manager_add_block_after' => 'add',
			'core.help_manager_add_block_before' => 'add',
			'core.help_manager_add_question_after' => 'add',
			'core.help_manager_add_question_before' => 'add',
			'core.index_mark_notification_after' => 'add',
			'core.index_modify_birthdays_list' => 'add',
			'core.index_modify_birthdays_sql' => 'add',
			'core.index_modify_page_title' => 'add',
			'core.load_drafts_draft_list_result' => 'add',
			'core.login_box_before' => 'add',
			'core.login_box_failed' => 'add',
			'core.login_box_modify_template_data' => 'add',
			'core.login_box_redirect' => 'add',
			'core.login_forum_box' => 'add',
			'core.make_forum_select_modify_forum_list' => 'add',
			'core.make_jumpbox_modify_forum_list' => 'add',
			'core.make_jumpbox_modify_tpl_ary' => 'add',
			'core.markread_after' => 'add',
			'core.markread_before' => 'add',
			'core.mcp_ban_after' => 'add',
			'core.mcp_ban_before' => 'add',
			'core.mcp_ban_confirm' => 'add',
			'core.mcp_ban_main' => 'add',
			'core.mcp_change_poster_after' => 'add',
			'core.mcp_change_topic_type_after' => 'add',
			'core.mcp_change_topic_type_before' => 'add',
			'core.mcp_forum_merge_topics_after' => 'add',
			'core.mcp_forum_view_before' => 'add',
			'core.mcp_front_queue_unapproved_total_before' => 'add',
			'core.mcp_front_reports_count_query_before' => 'add',
			'core.mcp_front_reports_listing_query_before' => 'add',
			'core.mcp_front_view_queue_postid_list_after' => 'add',
			'core.mcp_global_f_read_auth_after' => 'add',
			'core.mcp_lock_unlock_after' => 'add',
			'core.mcp_main_before' => 'add',
			'core.mcp_main_fork_sql_after' => 'add',
			'core.mcp_main_modify_fork_sql' => 'add',
			'core.mcp_main_modify_shadow_sql' => 'add',
			'core.mcp_post_additional_options' => 'add',
			'core.mcp_post_template_data' => 'add',
			'core.mcp_queue_approve_details_template' => 'add',
			'core.mcp_queue_get_posts_for_posts_query_before' => 'add',
			'core.mcp_queue_get_posts_for_topics_query_before' => 'add',
			'core.mcp_queue_get_posts_modify_post_row' => 'add',
			'core.mcp_queue_get_posts_query_before' => 'add',
			'core.mcp_report_template_data' => 'add',
			'core.mcp_reports_get_reports_query_before' => 'add',
			'core.mcp_reports_report_details_query_after' => 'add',
			'core.mcp_reports_report_details_query_before' => 'add',
			'core.mcp_sorting_query_before' => 'add',
			'core.mcp_topic_modify_post_data' => 'add',
			'core.mcp_topic_modify_sql_ary' => 'add',
			'core.mcp_topic_review_modify_row' => 'add',
			'core.mcp_topics_merge_posts_after' => 'add',
			'core.mcp_view_forum_modify_sql' => 'add',
			'core.mcp_view_forum_modify_topicrow' => 'add',
			'core.mcp_warn_post_after' => 'add',
			'core.mcp_warn_post_before' => 'add',
			'core.mcp_warn_user_after' => 'add',
			'core.mcp_warn_user_before' => 'add',
			'core.memberlist_memberrow_before' => 'add',
			'core.memberlist_modify_ip_search_sql_query' => 'add',
			'core.memberlist_modify_memberrow_sql' => 'add',
			'core.memberlist_modify_sort_pagination_params' => 'add',
			'core.memberlist_modify_sql_query_data' => 'add',
			'core.memberlist_modify_template_vars' => 'add',
			'core.memberlist_modify_view_profile_template_vars' => 'add',
			'core.memberlist_modify_viewprofile_sql' => 'add',
			'core.memberlist_prepare_profile_data' => 'add',
			'core.memberlist_team_modify_query' => 'add',
			'core.memberlist_team_modify_template_vars' => 'add',
			'core.memberlist_view_profile' => 'add',
			'core.message_admin_form_submit_before' => 'add',
			'core.message_history_modify_sql_ary' => 'add',
			'core.message_history_modify_template_vars' => 'add',
			'core.message_list_actions' => 'add',
			'core.message_parser_check_message' => 'add',
			'core.modify_attachment_data_on_submit' => 'add',
			'core.modify_attachment_data_on_upload' => 'add',
			'core.modify_attachment_sql_ary_on_submit' => 'add',
			'core.modify_attachment_sql_ary_on_upload' => 'add',
			'core.modify_bbcode_init' => 'add',
			'core.modify_email_headers' => 'add',
			'core.modify_format_display_text_after' => 'add',
			'core.modify_format_display_text_before' => 'add',
			'core.modify_group_name_string' => 'add',
			'core.modify_inline_attachments_template_vars' => 'add',
			'core.modify_mcp_modules_display_option' => 'add',
			'core.modify_memberlist_viewprofile_group_data' => 'add',
			'core.modify_memberlist_viewprofile_group_sql' => 'add',
			'core.modify_module_row' => 'add',
			'core.modify_notification_message' => 'add',
			'core.modify_notification_template' => 'add',
			'core.modify_pm_attach_download_auth' => 'add',
			'core.modify_posting_auth' => 'add',
			'core.modify_posting_parameters' => 'add',
			'core.modify_quickmod_actions' => 'add',
			'core.modify_quickmod_options' => 'add',
			'core.modify_submit_notification_data' => 'add',
			'core.modify_submit_post_data' => 'add',
			'core.modify_text_for_display_after' => 'add',
			'core.modify_text_for_display_before' => 'add',
			'core.modify_text_for_edit_after' => 'add',
			'core.modify_text_for_edit_before' => 'add',
			'core.modify_text_for_storage_after' => 'add',
			'core.modify_text_for_storage_before' => 'add',
			'core.modify_uploaded_file' => 'add',
			'core.modify_user_rank' => 'add',
			'core.modify_username_string' => 'add',
			'core.module_auth' => 'add',
			'core.move_posts_after' => 'add',
			'core.move_posts_before' => 'add',
			'core.move_posts_sync_after' => 'add',
			'core.move_topics_after' => 'add',
			'core.move_topics_before' => 'add',
			'core.move_topics_before_query' => 'add',
			'core.notification_manager_add_notifications' => 'add',
			'core.notification_message_email' => 'add',
			'core.notification_message_process' => 'add',
			'core.oauth_login_after_check_if_provider_id_has_match' => 'add',
			'core.obtain_users_online_string_before_modify' => 'add',
			'core.obtain_users_online_string_modify' => 'add',
			'core.obtain_users_online_string_sql' => 'add',
			'core.page_footer' => 'add',
			'core.page_footer_after' => 'add',
			'core.page_header' => 'add',
			'core.page_header_after' => 'add',
			'core.pagination_generate_page_link' => 'add',
			'core.parse_attachments_modify_template_data' => 'add',
			'core.permissions' => 'add',
			'core.phpbb_content_visibility_get_forums_visibility_before' => 'add',
			'core.phpbb_content_visibility_get_global_visibility_before' => 'add',
			'core.phpbb_content_visibility_get_visibility_sql_before' => 'add',
			'core.phpbb_content_visibility_is_visible' => 'add',
			'core.phpbb_generate_debug_output' => 'add',
			'core.phpbb_log_get_topic_auth_sql_after' => 'add',
			'core.phpbb_log_get_topic_auth_sql_before' => 'add',
			'core.pm_modify_message_subject' => 'add',
			'core.posting_modify_cannot_edit_conditions' => 'add',
			'core.posting_modify_default_variables' => 'add',
			'core.posting_modify_message_text' => 'add',
			'core.posting_modify_post_data' => 'add',
			'core.posting_modify_post_subject' => 'add',
			'core.posting_modify_quote_attributes' => 'add',
			'core.posting_modify_row_data' => 'add',
			'core.posting_modify_submission_errors' => 'add',
			'core.posting_modify_submit_post_after' => 'add',
			'core.posting_modify_submit_post_before' => 'add',
			'core.posting_modify_template_vars' => 'add',
			'core.prune_delete_before' => 'add',
			'core.prune_forums_settings_confirm' => 'add',
			'core.prune_forums_settings_template_data' => 'add',
			'core.prune_sql' => 'add',
			'core.report_post_auth' => 'add',
			'core.search_backend_search_after' => 'add',
			'core.search_get_posts_data' => 'add',
			'core.search_get_topic_data' => 'add',
			'core.search_modify_forum_select_list' => 'add',
			'core.search_modify_param_after' => 'add',
			'core.search_modify_param_before' => 'add',
			'core.search_modify_post_row' => 'add',
			'core.search_modify_rowset' => 'add',
			'core.search_modify_submit_parameters' => 'add',
			'core.search_modify_tpl_ary' => 'add',
			'core.search_modify_url_parameters' => 'add',
			'core.search_mysql_author_query_before' => 'add',
			'core.search_mysql_by_author_modify_search_key' => 'add',
			'core.search_mysql_by_keyword_modify_search_key' => 'add',
			'core.search_mysql_create_index_before' => 'add',
			'core.search_mysql_delete_index_before' => 'add',
			'core.search_mysql_index_before' => 'add',
			'core.search_mysql_keywords_main_query_before' => 'add',
			'core.search_native_author_count_query_before' => 'add',
			'core.search_native_by_author_modify_search_key' => 'add',
			'core.search_native_by_keyword_modify_search_key' => 'add',
			'core.search_native_delete_index_before' => 'add',
			'core.search_native_index_before' => 'add',
			'core.search_native_keywords_count_query_before' => 'add',
			'core.search_postgres_author_count_query_before' => 'add',
			'core.search_postgres_by_author_modify_search_key' => 'add',
			'core.search_postgres_by_keyword_modify_search_key' => 'add',
			'core.search_postgres_create_index_before' => 'add',
			'core.search_postgres_delete_index_before' => 'add',
			'core.search_postgres_index_before' => 'add',
			'core.search_postgres_keywords_main_query_before' => 'add',
			'core.search_results_modify_search_title' => 'add',
			'core.search_sphinx_index_before' => 'add',
			'core.search_sphinx_keywords_modify_options' => 'add',
			'core.search_sphinx_modify_config_data' => 'add',
			'core.send_file_to_browser_before' => 'add',
			'core.session_create_after' => 'add',
			'core.session_gc_after' => 'add',
			'core.session_ip_after' => 'add',
			'core.session_kill_after' => 'add',
			'core.session_set_custom_ban' => 'add',
			'core.set_cookie' => 'add',
			'core.set_post_visibility_after' => 'add',
			'core.set_post_visibility_before_sql' => 'add',
			'core.set_topic_visibility_after' => 'add',
			'core.set_topic_visibility_before_sql' => 'add',
			'core.smiley_text_root_path' => 'add',
			'core.submit_pm_after' => 'add',
			'core.submit_pm_before' => 'add',
			'core.submit_post_end' => 'add',
			'core.submit_post_modify_sql_data' => 'add',
			'core.text_formatter_s9e_configure_after' => 'add',
			'core.text_formatter_s9e_configure_before' => 'add',
			'core.text_formatter_s9e_configure_finalize' => 'add',
			'core.text_formatter_s9e_parse_after' => 'add',
			'core.text_formatter_s9e_parse_before' => 'add',
			'core.text_formatter_s9e_parser_setup' => 'add',
			'core.text_formatter_s9e_render_after' => 'add',
			'core.text_formatter_s9e_render_before' => 'add',
			'core.text_formatter_s9e_renderer_setup' => 'add',
			'core.thumbnail_create_before' => 'add',
			'core.topic_review_modify_post_list' => 'add',
			'core.topic_review_modify_row' => 'add',
			'core.topic_review_modify_sql_ary' => 'add',
			'core.twig_environment_render_template_after' => 'add',
			'core.twig_environment_render_template_before' => 'add',
			'core.ucp_activate_after' => 'add',
			'core.ucp_add_zebra' => 'add',
			'core.ucp_delete_cookies' => 'add',
			'core.ucp_display_module_before' => 'add',
			'core.ucp_login_link_template_after' => 'add',
			'core.ucp_main_front_modify_sql' => 'add',
			'core.ucp_main_front_modify_template_vars' => 'add',
			'core.ucp_main_subscribed_forum_modify_template_vars' => 'add',
			'core.ucp_main_subscribed_forums_modify_query' => 'add',
			'core.ucp_main_subscribed_post_data' => 'add',
			'core.ucp_main_topiclist_count_modify_query' => 'add',
			'core.ucp_main_topiclist_modify_query' => 'add',
			'core.ucp_main_topiclist_topic_modify_template_vars' => 'add',
			'core.ucp_pm_compose_compose_pm_basic_info_query_before' => 'add',
			'core.ucp_pm_compose_modify_data' => 'add',
			'core.ucp_pm_compose_modify_parse_before' => 'add',
			'core.ucp_pm_compose_predefined_message' => 'add',
			'core.ucp_pm_compose_quotepost_query_after' => 'add',
			'core.ucp_pm_compose_template' => 'add',
			'core.ucp_pm_view_folder_get_pm_from_sql' => 'add',
			'core.ucp_pm_view_folder_get_pm_from_template' => 'add',
			'core.ucp_pm_view_message' => 'add',
			'core.ucp_pm_view_messsage' => 'add',
			'core.ucp_prefs_modify_common' => 'add',
			'core.ucp_prefs_personal_data' => 'add',
			'core.ucp_prefs_personal_update_data' => 'add',
			'core.ucp_prefs_post_data' => 'add',
			'core.ucp_prefs_post_update_data' => 'add',
			'core.ucp_prefs_view_after' => 'add',
			'core.ucp_prefs_view_data' => 'add',
			'core.ucp_prefs_view_update_data' => 'add',
			'core.ucp_profile_avatar_sql' => 'add',
			'core.ucp_profile_avatar_upload_validation' => 'add',
			'core.ucp_profile_info_modify_sql_ary' => 'add',
			'core.ucp_profile_modify_profile_info' => 'add',
			'core.ucp_profile_modify_signature' => 'add',
			'core.ucp_profile_modify_signature_sql_ary' => 'add',
			'core.ucp_profile_reg_details_data' => 'add',
			'core.ucp_profile_reg_details_sql_ary' => 'add',
			'core.ucp_profile_reg_details_validate' => 'add',
			'core.ucp_profile_validate_profile_info' => 'add',
			'core.ucp_register_agreement' => 'add',
			'core.ucp_register_agreement_modify_template_data' => 'add',
			'core.ucp_register_data_after' => 'add',
			'core.ucp_register_data_before' => 'add',
			'core.ucp_register_modify_template_data' => 'add',
			'core.ucp_register_register_after' => 'add',
			'core.ucp_register_requests_after' => 'add',
			'core.ucp_register_user_row_after' => 'add',
			'core.ucp_register_welcome_email_before' => 'add',
			'core.ucp_remind_modify_select_sql' => 'add',
			'core.ucp_remove_zebra' => 'add',
			'core.ucp_reset_password_modify_select_sql' => 'add',
			'core.ucp_restore_permissions' => 'add',
			'core.ucp_switch_permissions' => 'add',
			'core.update_session_after' => 'add',
			'core.update_username' => 'add',
			'core.user_active_flip_after' => 'add',
			'core.user_active_flip_before' => 'add',
			'core.user_add_after' => 'add',
			'core.user_add_modify_data' => 'add',
			'core.user_add_modify_notifications_data' => 'add',
			'core.user_format_date_override' => 'add',
			'core.user_set_default_group' => 'add',
			'core.user_set_group_attributes' => 'add',
			'core.user_setup' => 'add',
			'core.user_setup_after' => 'add',
			'core.user_unban' => 'add',
			'core.validate_bbcode_by_extension' => 'add',
			'core.validate_config_variable' => 'add',
			'core.viewforum_generate_page_after' => 'add',
			'core.viewforum_get_announcement_topic_ids_data' => 'add',
			'core.viewforum_get_shadowtopic_data' => 'add',
			'core.viewforum_get_topic_data' => 'add',
			'core.viewforum_get_topic_ids_data' => 'add',
			'core.viewforum_modify_page_title' => 'add',
			'core.viewforum_modify_sort_data_sql' => 'add',
			'core.viewforum_modify_sort_direction' => 'add',
			'core.viewforum_modify_topic_ordering' => 'add',
			'core.viewforum_modify_topicrow' => 'add',
			'core.viewforum_modify_topics_data' => 'add',
			'core.viewforum_topic_row_after' => 'add',
			'core.viewonline_modify_forum_data_sql' => 'add',
			'core.viewonline_modify_sql' => 'add',
			'core.viewonline_modify_user_row' => 'add',
			'core.viewonline_overwrite_location' => 'add',
			'core.viewtopic_add_quickmod_option_before' => 'add',
			'core.viewtopic_assign_template_vars_before' => 'add',
			'core.viewtopic_before_f_read_check' => 'add',
			'core.viewtopic_cache_guest_data' => 'add',
			'core.viewtopic_cache_user_data' => 'add',
			'core.viewtopic_gen_sort_selects_before' => 'add',
			'core.viewtopic_get_post_data' => 'add',
			'core.viewtopic_highlight_modify' => 'add',
			'core.viewtopic_modify_forum_id' => 'add',
			'core.viewtopic_modify_page_title' => 'add',
			'core.viewtopic_modify_poll_ajax_data' => 'add',
			'core.viewtopic_modify_poll_data' => 'add',
			'core.viewtopic_modify_poll_template_data' => 'add',
			'core.viewtopic_modify_post_action_conditions' => 'add',
			'core.viewtopic_modify_post_data' => 'add',
			'core.viewtopic_modify_post_list_sql' => 'add',
			'core.viewtopic_modify_post_row' => 'add',
			'core.viewtopic_modify_quick_reply_template_vars' => 'add',
			'core.viewtopic_post_row_after' => 'add',
			'core.viewtopic_post_rowset_data' => 'add',

		];
	}

	public function add(Event $event, $event_name):void
	{
		if (isset($this->count_ary[$event_name]))
		{
			$this->count_ary[$event_name]++;
			return;
		}

		$this->count_ary[$event_name] = 1;
	}

	public function get_count_ary():array
	{
		return $this->count_ary;
	}
}