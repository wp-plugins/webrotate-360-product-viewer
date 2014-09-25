=== 360 Product Viewer ===
Contributors: sergey z., mahor
Donate link: http://www.webrotate360.com/360-product-viewer.html
Tags: 360 viewer, 360 product viewer, 360 views, 360 product views, image zoom, 3D viewer, pano viewer, product zoom, 360 degree panorama, 360 product spin,  html5, QTVR, 360 product photography, virtual tour, 360 degree photo, 3D view, product rotation, 360 image spin, 360 spin, spin 360, webrotate
Requires at least: 3.0.0
Tested up to: 4.0.0
Stable tag: 2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed 360 product views and 360-degree panoramic views created with WebRotate 360 Product Viewer in your WordPress posts and pages.

== Description ==

WebRotate 360 Product Viewer for WordPress is a free plugin that can be used to integrate advanced 360 product views and 360-degree panoramic views created with WebRotate 360 Product Viewer. To see a demonstration of this plugin, please visit our demo page:

<a href="http://www.360-product-views.com/wordpress/">DEMO</a><br>


<h4>Features</h4>
This product was built by us from grounds up in-house in Pasadena, California, with its first commercial release dating back to 2010. Unlike other software on the Web, our 360 product viewing technology utilizes our own extensive experience producing professional 360 product photography and 3D views.

* Fine-tuned for E-Commerce with real business in mind.
* Designed by professional 360 photography studio.
* Unique publishing software with instant batch processing.
* Host everything on your own servers - no recurring fees.
* Works on iOS, Android, browsers with & without HTML5.
* Extensive hotspot support for advanced interactivity.
* Highly customizable (features, skins, templates, API, etc.)
* Lightweight and fast with quick integration.
* No server side scripts required - all client based.
* All configuration is done via a separate XML file.
* Continuously tested on all major browsers and devices.


<h4>Upgrade to PRO</h4>
Support our work by <a href="http://www.webrotate360.com/360-product-viewer-buy.html">going PRO</a> that adds the following features:

* Advanced desktop publishing software.
* Full-screen support.
* Ability to load 360 product images from CDN (external server) or use a single master configuration for multiple 360 product views.
* Multiple embed shortcodes on the same page or post (i.e, wr360embed).
* Unlimited hotspots.
* Free support and core product upgrades.

<h4>How to create 360 views</h4>
If you haven't created 360 product views with WebRotate 360 Product Viewer before, please download our free software (Windows or Mac OS X) and follow this simple YouTube video or check out the following user guide on how to create 360 spins on your computer which you can then upload to your WordPress installation via FTP:

* <a href="http://www.webrotate360.com/360-product-viewer.html">Download WebRotate 360 Product Viewer Software</a><br>
* <a href="http://www.webrotate360.com/360_product_viewer_download/Readme.pdf">User Guide</a><br>
* <a href="http://www.youtube.com/watch?v=W3uFpXy1ne4">YouTube Tutorial</a>

[youtube http://www.youtube.com/watch?v=W3uFpXy1ne4]

<h4>Support</h4>
Check out the Installation tab for specific WordPress installation instructions. For more information and your questions, please visit our <a href="http://www.360-product-views.com/forum/">product forum</a> or email us at support at webrotate360 dot com. 

<h4>Connect with us</h4>
To follow our news, articles, beta releases and more, consider the following options:

* <a href="https://www.facebook.com/360views">Facebook</a>
* <a href="https://plus.google.com/+Webrotate360">Google+</a>
* <a href="https://twitter.com/webrotate360">Twitter</a>
* <a href="http://www.webrotate360.com/blog/">Blog</a>
* <a href="http://www.photogear360.com/blog/">Equipment Blog</a>


== Installation ==

<h4>Installation instructions</h4>
Please follow these simple steps to install the WordPress plugin on your server:

* Install WebRotate 360 Product Viewer for WordPress by either installing directly from your WordPress Admin area or download the module manually and copy unzipped webrotate360 folder into your wp-content/plugins.
* Activate the module via the Plugins page in your WordPress Admin.
* Upload your 360 views via ftp to your web server and note the location of an xml configuration file(s) in the uploaded folder(s) as you will need it for the shortcodes as shown below. <strong>We also have supplied one test 360 product view that is located inside the plugin folder under 360_assets. To try this test view in your shortcode, you can use the following config path per the shortcode examples below:  <em>/wp-content/plugins/webrotate-360-product-viewer/360_assets/sampleshoe/config.xml</em></strong>
* Simply add the following shortcode inside your post or page where you would like to see the 360 product view embedded, substituting name, width, height and config with your own values.

**Example 1:** [wr360embed name="yourviewname" width="100%" height="450px" config="/your-wordpress-site/360-assets/sampleshoe/config.xml"]

<i>You can also add an extra shortcode parameter called basewidth and specify the original width of your embedded 360 product viewer (i.e., basewidth="620px"). So when your primary shortcode width parameter is relative (i.e 100% as in the example above), the basewidth setting will force the 360 product viewer to scale its height relative to your original viewer width (basewidth). If the basewidth parameter is not set, the viewer height is not scaled when it's embedded in a responsive layout environment.</i>

<h4>Integrate via popup</h4>
Use the following shortcode to integrate via lightbox popup (replace name, width, height and config with your own values):

**Example 2:** [wr360popup name="yourviewname" width="620" height="450" config="/your-wordpress-site/360-assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

<h4>Popup gallery</h4>
If you need to show a gallery of your 360 views via a popup, add multiple wr360popup shortcodes for each of your 360 views with an extra parameter called gallery:

[wr360popup name="yourviewname1" gallery="true" width="620" height="450" config="/your-wordpress-site/360-assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

[wr360popup name="yourviewname2" gallery="true" width="400" height="400" config="/your-wordpress-site/360-assets/sampleshoe3/config.xml"]your thumbnail image or text[/wr360popup]


== Uninstall ==

Deactivate WebRotate 360 Product Viewer for WordPress via the plugins page in your WordPress Admin.