=== 360 Product Viewer ===
Contributors: webrotate360
Donate link: http://www.webrotate360.com/360-product-viewer.html
Tags: 3D viewer, 360 product viewer, 3D product view, woocommerce, 360 views, 360 product views, image zoom, 3D product viewer, pano viewer, product zoom, 360 product spin,  html5, QTVR, 360 product photography, virtual tour, 360 degree photo, 3D view, product rotation, 360 image spin, 360 spin, spin 360, webrotate, shortcode, images, popup, gallery
Author URI: http://www.webrotate360.com/360-product-viewer.html
Author: WebRotate 360 LLC
Requires at least: 3.0.0
Tested up to: 4.3.0
Stable tag: 2.5.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed 360 product photography and 3D product views created with WebRotate 360 Product Viewer in your WordPress posts and pages.

== Description ==

WebRotate 360 Product Viewer for WordPress is a free plugin that can be used to integrate advanced 3D product views and 360 product photography created with WebRotate 360 Product Viewer. To see a demonstration of this plugin, please visit our demo page:

<a href="http://www.360-product-views.com/wordpressdemo4/">DEMO</a><br>


<h4>Features</h4>
This product was built by us from grounds up in-house in Pasadena, California with its first commercial release dating back to 2010. Unlike other software on the Web, our 360 product viewing technology utilizes our own extensive experience producing professional 360 product photography and 3D views.

* Fine-tuned for E-Commerce with real business in mind.
* Designed by professional 360 product photography studio.
* Unique publishing software with instant batch processing.
* Host everything on your own servers.
* Works on iOS, Android, browsers with & without HTML5.
* Extensive hotspot support for advanced interactivity.
* Highly customizable (features, skins, templates, API, etc.)
* Lightweight and fast with quick integration.
* No server side scripts required - all client based.
* All viewer configuration is done via a separate XML file.
* Continuously tested on all major browsers and devices.


<h4>Beta v3.0</h4>
New version of the plugin (still in beta) adds full 3D product views (multi-row), native WooCommerce integration, Google Analytics events, viewer API integration, wr360expand shortcode and more. Learn more and download:

<a href="http://www.webrotate360.com/Blog/post/New-WordPress-Plugin-With-Full-3D-Product-Views-and-Native-WooCommerce-Integration.aspx">DOWNLOAD BETA V3.0</a><br>


<h4>Upgrade to PRO</h4>
Support our work by <a href="http://www.webrotate360.com/360-product-viewer-buy.html">going PRO</a> that adds the following features:

* Advanced desktop publishing software.
* Full-screen support.
* Ability to load 360 product images from CDN (external server) or use a single master configuration for multiple 360 product views.
* Multiple embed shortcodes on the same page or post (i.e, wr360embed).
* Google Analytics events (via beta v3.0).
* Unlimited hotspots.
* Free support and core product upgrades.

<h4>How to create 360 product views</h4>
If you haven't created 360 product views with WebRotate 360 Product Viewer before, please download our free software (Windows or Mac OS X) and follow this simple YouTube video or check out the following user guide on how to create 360 spins on your computer which you can then upload to your WordPress installation via FTP. Note that you only need to upload a single folder that is auto-created under 360_assets in the published folder of your SpotEditor project upon publish.

* <a href="http://www.webrotate360.com/360-product-viewer.html">Download WebRotate 360 Product Viewer Software</a><br>
* <a href="http://www.webrotate360.com/360_product_viewer_download/Readme.pdf">User Guide</a><br>
* <a href="http://www.youtube.com/watch?v=W3uFpXy1ne4">YouTube Tutorial</a>

[youtube http://www.youtube.com/watch?v=W3uFpXy1ne4]

<h4>Support</h4>
Check out the Installation tab for specific WordPress installation instructions. For more information and your questions, please visit our <a href="http://www.360-product-views.com/forum/">product forum</a> or email us at support at webrotate360 dot com. <em><strong>We would be happy to assist with your WordPress integration if you have any issues!</strong></em>

<h4>Connect with us</h4>
To follow our news, articles, beta releases and more, consider the following options:

* <a href="https://www.facebook.com/360views">Facebook</a>
* <a href="https://plus.google.com/+Webrotate360">Google+</a>
* <a href="https://twitter.com/webrotate360">Twitter</a>
* <a href="http://www.webrotate360.com/blog/">Blog</a>
* <a href="http://www.photogear360.com/blog/">360 Product Photography Blog</a>


== Installation ==

<h4>Upload published 360 product views</h4>

Upload your 360 product views via FTP to your server and note the location of an xml configuration file(s) in the uploaded folder(s) as you will need it for the shortcodes as shown below. Note that you only need to upload a single folder that is auto-created under 360_assets in the published folder of your SpotEditor project upon publish. There's also one sample 360 product view located under the plugin folder under 360_assets. To try this sample, please use the following config path as per the shortcode examples below:  <strong><em>/wp-content/plugins/webrotate-360-product-viewer/360_assets/sampleshoe/config.xml</em></strong>

<h4>Embed inside a page or post</h4>

Simply add the following shortcode inside a page or post in WordPress admin where you would like to see your 360 product view embedded, replacing name, width, height and config with your own values.

**Example 1:** [wr360embed name="yourviewname" width="100%" height="450px" config="/wp-content/plugins/webrotate-360-product-viewer/360_assets/sampleshoe/config.xml"]

You can also add an extra shortcode parameter called basewidth to specify the original width of your embedded 360 product viewer. So when your primary shortcode width parameter is relative (i.e 100% as in the example above), the basewidth setting will force the viewer to scale its height relative to your original viewer width (basewidth). If the basewidth parameter is not set, the viewer height is not scaled when it's embedded inside a responsive layout.

**Example 2:** [wr360embed name="yourviewname" width="100%" height="450px" basewidth="620px" config="/wp-content/plugins/webrotate-360-product-viewer/360_assets/sampleshoe/config.xml"]

Alternatively, you can specify default viewer dimensions on the plugin settings page where you can configure other default options such as viewer and popup skins, master config and more. If default dimensions are specified in the plugin settings, you don't need to repeat them again in your shortcodes.

<h4>Integrate via popup</h4>
Use the following shortcode to integrate via lightbox popup (replace name, width, height and config with your own values accordingly). Please note that the sample config path below indicates that the 360 product view was uploaded under the 360_assets folder located in the root of your WordPress website (i.e on the same level with wp-content) that you would need to create there first:

**Example 3:** [wr360popup name="yourviewname" width="620px" height="450px" config="/360_assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

<h4>Integrate via popup gallery</h4>
If you need to show a gallery of your 360 product views via a popup, just add multiple wr360popup shortcodes for each view with an extra parameter called gallery:

**Example 4:**
[wr360popup name="yourviewname1" gallery="true" width="620px" height="450px" config="/360_assets/sampleshoe2/config.xml"]your thumbnail image or text[/wr360popup]

[wr360popup name="yourviewname2" gallery="true" width="400px" height="400px" config="/360_assets/sampleshoe3/config.xml"]your thumbnail image or text[/wr360popup]

<h4>Load images from CDN and / or use master config (PRO)</h4>

Both shortcodes support the rootpath parameter that can be used to specify an alternative location of your image assets as configured in the config xml. When it's set in the shortcode, the viewer will prepend rootpath to all image path specified in the viewer configuration xml. This is valuable when you need to store image assets on a dedicated file server or CDN. 

**Example 5:** [wr360embed name="yourviewname" width="620px" height="450px" rootpath="http://mycdn.com/360_assets/product1/" config="/360_assets/product1/config.xml"]

The rootpath parameter may be also used to load multiple shortcodes using just a single / master config xml that can be set under plugin settings via Master Config URL (assuming the number of images and their file names are the same across multiple shortcodes), in which case you don't need to specify the config parameter in each of your shortcodes that share the same master config settings.

== Frequently Asked Questions ==

=  I entered a shortcode as per your instructions, but I can only see the three loading bars and nothing happens: =

In most cases this happenes due to an invalid xml path in the config parameter of a shortcode. Please verify that the config path is correct. You can always just enter a full URL of the config xml file on your web server (http://www..) and verify that it's actually accessible online by pasting the same URL in your browser address bar. If the xml file can be successfully loaded in your browser, it will work inside the shortcodes. You may then remove the website name from the URL including http:// and leave the rest, but then please make sure you add "/" in the front of the remaining URL to have it as a relative path. Using a relative path is only important if your website can be accessed using both http://www.website and http://website (i.e without www.) and they don't resolve to the same URL. 

= Image rotation in some browsers may become jerky or unresponsive. If hotspots are present, they move as if they are detached from images: =

This is usually caused by disabled image caching as per the HTTP headers received from your web server that force web browsers to not cache any images. Please find more details and a simple solution for Apache servers on our forum <a href="http://www.360-product-views.com/forum/viewtopic.php?f=3&t=273&p=471">here</a>. Note that JPG & PNG image caching is usually enabled by default by all major web hosting provides. Although it can be manually disabled during website development or may need extra configuration if using Amazon S3 for hosting your 360 product images.

= I purchased the PRO license but my PRO features were not activated: =

For certain PRO features you may need to request the commercial version of imagerotator.js or use the one from any of your published SpotEditor PRO projects located under published/imagerotator/html/js and just copy it to wp-content/plugins/webrotate-360-product-viewer/imagerotator/html/js. Please also verify that your license.lic is either present in the root of the plugin folder or correct license path is configured in the plugin settings.

== Screenshots ==

1. Embed 360 product views anywhere inside your post or page. Use multitude of settings to configure your 360 product spins, changes skins, dimensions, drag speed, inertia, etc.
2. Integrate 360 product views to launch inside the prettyPhoto lightbox popup with a 360 view gallery support.
3. Configure various defaults and skins on the dedicated plugin settings page.
4. Download free software to create your 360 degree product views in couple of mouse clicks on Windows or Mac.
5. Add interactive hotspots, watermarks, logos, etc.
6. Use instant image filters to optimize your 360-degree images before upload.
7. Apply instant non-destructive crop and resize and publish straight to your WordPress FTP.

== Changelog ==

= 2.5.2 = 
* FIXED: security issue reported by WP team in a third-party library. 
* <strong>NOTE:</strong> entire contents of the plugin will be 
removed upon automatic update, so if you have any 360 assets or a license file stored in webrotate's plugin folder, please backup the plugin folder first.
 
= 2.5.1 = 
* FIXED: issue was fixed that could affect interactive sliders and other javascript functions on certain WP installations.

= 2.5 =
* ADDED: new plugin settings page with various defaults.
* ADDED: drop-down with 360 product viewer skins.
* ADDED: drop-down with prettyPhoto / popup skins.
* ADDED: defaults for viewer dimensions, basewidth, Master Config, etc.
* ADDED: new shortcode parameter to allow disabling browser optimization when using PNG images with opacity (imageopacity="true").
* ADDED: latest version of WebRotate 360 Product Viewer v3.5 scripts and graphics (free version).
* FIXED: prettyPhoto margin calculations was reworked to show correctly on small device screens.
* FIXED: shortcode width and height are now correctly parsed whether "px" was supplied or not.
* <strong>NOTE:</strong> if using PRO, you may need to re-apply your license.lic as it's removed by WordPress upon upgrade. Simply copy it under the root of the webrotate plugin folder or specify its new location on your server using the new plugin settings page (this way it will not happen next time you upgrade the plugin). You may also need to request the commercial version of imagerotator.js or use the one from any of your published SpotEditor PRO projects located under published/imagerotator/html/js and copy it to wp-content/plugins/webrotate-360-product-viewer/imagerotator/html/js. 

= 2.0 =
* ADDED: ability to add multiple embedded 360 product spins on the same page or post.
* ADDED: gallery mode to show multiple spins via a popup gallery (prettyPhoto).
* ADDED: image loading from CDN or external file servers via rootpath parameter.
* ADDED: support for responsive themes in wr360embed shorcodes when width is relative (e.g, 100%).

== Upgrade Notice ==

= 2.5.2 =
Please update ASAP due to security issue in a third-party library reported by WordPress which was just fixed. Note that the entire contents of the plugin will be removed upon automatic update, so if you have any 360 assets or license stored in webrotate's plugin folder, please backup first.

= 2.5.1 =
Please update ASAP if you have v2.5 of the plugin already installed.

= 2.5 =
Introduced plugin settings with various defaults. If using PRO, please review upgrade note under <a href="https://wordpress.org/plugins/webrotate-360-product-viewer/changelog/">Changelog</a> as additional steps may be required.
