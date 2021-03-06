This is a fork of GlotPress, focusing on integration with a WordPress install.

Glot-O-Matic Core also includes several fixes to GlotPress:

	- BackPress is included in the distro, so a single download will get you everything you need to install.
	- Custom BackPress patch to resolve error when the installation routine creates the database tables.
	- Support for IIS installs.
	- Additional filters/actions to support the new plugins.
	- A transparent logo file so you can customize your install better.

There are ten new plugins included in this version:

	- remove-projects-from-breadcrums
	- use-slug-for-downloads
	- wordpress-single-sign-on
	- new-window-for-external-links
	- remove-powered-by
	- bulk-download-translations
	- force-ssl
	- single-click-edit
	- last-update
	- color-logo
	
as well as an update to the google-translate plugin.  See the individual readme.txt files included with each plugin for more details on them.

New Plugin: remove-projects-from-breadcrums
-------------------------------------------
This plugin allows you to remove the "Projects" item from the breadcrumbs at the top of a GlotPress site, useful if you have only one project to host.  See the readme for more details in the plugin directory.
	
This plugin requires the version of GlotPress contained in this repository, the official GlotPress distribution will not work as there are several filters that are required but do not exist in it.
	
New Plugin: use-slug-for-downloads
----------------------------------
This plugin allows you to use the slug as the default filename when exporting a translation set.  See the readme for more details in the plugin directory.
	
This plugin will work with the official GlotPress distribution after July 19, 2015.

New Plugin: wordpress-single-sign-on
------------------------------------
This plugin allows you to use the WordPress cookies, giving you a single sign on to WordPress and GlotPress at the same time.  See the readme for more details in the plugin directory.

This plugin requires the version of GlotPress contained in this repository, the official GlotPress distribution will not work as there are several filters that are required but do not exist in it.
	
New Plugin: new-window-for-external-links
-----------------------------------------
This plugin allows you to use the WordPress cookies, giving you a single sign on to WordPress and GlotPress at the same time.  See the readme for more details in the plugin directory.

This plugin will work with the official GlotPress distribution.

New Plugin: remove-powered-by
-----------------------------
This plugin will get rid of the "Proudly powered by GlotPress" link in the footer of the page.

This plugin will work with the official GlotPress distribution.
	
New Plugin: bulk-download-translations
--------------------------------------
This plugin will download all the translation sets (in PO format) of a project in a zip file at once.

This plugin will work with the official GlotPress distribution.
	
New Plugin: force-ssl
--------------------------------------
This plugin will redirect any non-SSL requests to https.

This plugin will work with the official GlotPress distribution.

New Plugin: single-click-edit
---------------------------------
Single Click Edit is a plugin for GlotPress that will enable users to single click anywhere on the translation row to open the editor instead of having to click on "Details" or double click the row.
	
This plugin will work with the official GlotPress distribution.

New Plugin: last-update
---------------------------------
Last Update is a plugin for GlotPress that will display the last update date/time in the translation set list.
	
This plugin will work with the official GlotPress distribution.

New Plugin: color-update
---------------------------------
Last Update is a plugin for GlotPress that will add some color to the GlotPress logo in the top left of the screen.
	
This plugin will work with the official GlotPress distribution.

Updated Plugin: google-translate
--------------------------------
The Google translate plugin has been updated, you can now assign a Google API key to individual users and a readme has been added with details on the configuraiton of the plugin.
	
This plugin will work with the official GlotPress distribution.

