=== ACF Pro JSON Sync ===
Contributors: o3world
Tags: custom, field, custom field, advanced, simple fields, magic fields, more fields, repeater, matrix, post, type, text, textarea, file, image, edit, admin
Requires at least: 3.5.0
Tested up to: 4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 1.0.1

Sync Advanced Custom Fields fields stored in json files into the database. Ideal for using ACF in multiple environments or in a team setting.


== Description ==


Local JSON is a new feature added in version 5 which saves field group and field settings to files within your theme. The idea is similar to caching and both dramatically speeds up ACF and allows for version control over your field settings!

HOWEVER, the wp-admin field group edit screen will not load data from local json files, meaning you can not edit fields which are loaded from json files. This plugin solves this problem by creating an easy way to sync json fields into the database. This allows fields to be shared across multiple environments and contributors without having to export/import the database. 

This plugin copies much of the functionality found in the Advanced Custom Fields export settings (advanced-custom-fields-pro/admin/settings-export.php).


= Notes =
* Local Json folder filename must be the default acf-json.
* Syncing down json fields will overwrite all fields stored in the database. Use with caution!



== Installation ==

1. Upload 'acf-sync' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click on the new menu item "ACF Sync" and click Sync Now
4. Any fields stored in your acf-json folder will be imported in the database, and can be edited as normal.



== Screenshots ==

1. AFC Pro Sync admin screen

== Frequently Asked Questions ==

Coming Soon!


== Changelog ==

= 1.0 =
* Initial Setup :)



