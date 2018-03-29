# PhpBB Extension - marttiphpbb Template Events

This extension for developers shows all core template events. Since version 1.3.0 also the core PHP events that were triggered for the current request are shown at the bottom of the page. 

**This extension is a helper tool for developing other extenstions. It should not be used on a live forum.**

![Screenshot](/doc/screenshot.png)

## Quick Install

You can install this on the latest release of phpBB 3.2 by following the steps below:

Do you have the "Recompile stale style components" option enabled?

ACP > General > Server Configuration > Load Settings > Recompile stale style components


* Before enabling this extension, make sure the option "Enable stale style components" in the ACP is enabled. See ACP > General > Server Configuration > Load Settings > Recompile stale style components.
* Create `marttiphpbb/templateevents` in the `ext` directory.
* Download and unpack the repository into `ext/marttiphpbb/templateevents`
* Enable `Template Events` in the ACP at `Customise -> Manage extensions`.

## Uninstall

* Disable `Template Events` in the ACP at `Customise -> Extension Management -> Extensions`.
* To permanently uninstall, click `Delete Data`. Optionally delete the `/ext/marttiphpbb/templateevents` directory.

## Support

* Report bugs and other issues to the [Issue Tracker](https://github.com/marttiphpbb/templateevents/issues).
* Support requests should be posted and discussed in the [Template Events topic at phpBB.com](https://www.phpbb.com/community/viewtopic.php?f=456&t=2283446).

## License

[GPL-2.0](license.txt)
