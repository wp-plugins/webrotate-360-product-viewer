=== 360 Product Viewer ===
Contributors: sergey z., dimitri bir
Donate link: http://www.webrotate360.com/360-product-viewer.html
Tags: 360 viewer, 360 product viewer, 360 views, 360 product views, image zoom, 3D viewer, pano viewer, product zoom, 360 degree panorama, 360 product spin, html5, QTVR, 360 product photography, virtual tour, 360 degree photo
Requires at least: 3.0.0
Tested up to: 3.5.1
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed 360 product views and 360-degree panoramic views created with WebRotate 360 Product Viewer in your WordPress posts and pages.

== Description ==

WebRotate 360 Product Viewer for WordPress is a free plugin that can be used to integrate advanced 360 product views and 360-degree panoramic views created with WebRotate 360 Product Viewer. To see a demonstration of this plugin, please visit our demo page:

<a href="http://www.360-product-views.com/wordpress/">DEMO</a><br>
<a href="http://www.webrotate360.com/360-product-viewer.html">WebRotate 360 Product Viewer</a>

<h4>Main plugin features include:</h4>
* Designed by professional 360 photography studio.
* Lightweight and fast with quick integration.
* Host images on your servers - no fees or vendor lock-in.
* Works on iPad, iPhone, Android smartphones and browsers with or without HTML5.
* Variety of settings to control playback, speed, rotation, inertia, presentation, and more.
* Extensive hot-spot and image annotation support with granular control.
* Deep image zoom using an extra set of high resolution images.
* Full-screen support (PRO version).
* All configuration is done via a separate XML file.
* Free desktop software for quick configuration and publishing of your 360 views is available.
* No server side scripts required - all client / browser based.
* Ability to load 360-degree images from CDN (external server) or using a master configuration XML across multiple products (PRO version).



== Installation ==

<h4>Please follow these steps to install the extension:</h4>
* Install WebRotate 360 Product Viewer for WordPress by either installing directly from your WordPress Admin area or download the module manually and copy unzipped webrotate360 folder into your wp-content/plugins.
* Activate the module via the Plugins page in your WordPress Admin.
* Upload your 360 views via ftp to your web server and note the location of xml configuration file(s) in the uploaded folder(s) as you will need it for the shortcodes as shown below.
* Simply add the following line inside your post or page where you would like to see the 360 view embedded, substituting name, width, height and config with your own values.

[wr360embed name="yourviewname" width="100%" height="450px" config="/wordpress/360-assets/sampleshoe/config.xml"]

* To integrate via popup, use the following shortcode (replace name, width, height and config with your own values):

[wr360popup name="yourviewname" width="620" height="450" config="/wordpress/360-assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

If you need to show a gallery of your 360 views via a popup, add multiple wr360popup shortcodes for each of your 360 views with an extra parameter called gallery:

[wr360popup name="yourviewname1" gallery="true" width="620" height="450" config="/wordpress/360-assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

[wr360popup name="yourviewname2" gallery="true" width="400" height="400" config="/wordpress/360-assets/sampleshoe3/config.xml"]your thumbnail image or text[/wr360popup]


<h4>How to create 360 views:</h4>

If you haven't created 360 views with WebRotate 360 Product Viewer before, you will need to download our free software and follow this simple YouTube video below to create your 360 views first and then just upload them to your WordPress installation via FTP:

<a href="http://www.webrotate360.com/360-product-viewer.html">Download software</a><br>
<a href="http://youtu.be/8XQi7_YfTdA">Youtube tutorial</a>

== Uninstall ==

Deactivate WebRotate 360 Product Viewer for WordPress via the plugins page in your WordPress Admin.