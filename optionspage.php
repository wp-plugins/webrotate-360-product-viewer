<div class="wrap">
    <h2>WebRotate 360 Product Viewer</h2>
    <form method="post" action="options.php">
        <p>Shortcode overview and samples are available on the plugin page <a href="https://wordpress.org/plugins/webrotate-360-product-viewer/installation/" target="_blank">here</a> and via this <a href="http://www.360-product-views.com/wordpress/" target="_blank">demo site</a>.
        If you haven't created 360 product views with WebRotate 360 Product Viewer before, please download our <a href="http://www.webrotate360.com/360-product-viewer.html" target="_blank">free software</a> (Windows or Mac OS X) and follow this simple <a href="http://www.youtube.com/watch?v=W3uFpXy1ne4"  target="_blank">YouTube video</a> or check out this <a href="http://www.webrotate360.com/360_product_viewer_download/Readme.pdf"  target="_blank">user guide</a> on how to create 360 spins on your computer which you can then upload to your WordPress installation via FTP. Note that you only need to upload a single folder that is auto-created under 360_assets in the published folder of your SpotEditor project upon publish.</p>
        <p style="margin-bottom:30px;"><b>If you have any issues with our module, please ping us on <a href="mailto:support@webrotate360.com">support@webrotate360.com</a> or visit our <a href="http://360-product-views.com/forum/" target="_blank">forum</a> and we would be happy to assist.</b></p>
        <h3>Default settings</h3>
        <?php settings_fields("webrotate360-settings-group") ?>
        <?php do_settings_sections("webrotate360-settings-group") ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Viewer Width (px or %)</th>
                <td>
                    <input type="text" name="wr360_viewer_width" value="<?php echo get_option('wr360_viewer_width'); ?>"/>
                    <p class="description">Default viewer width in pixel. When using wr360embed shortcode, can be a relative width (e.g. 100%) for responsive themes.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Viewer Height (px)</th>
                <td>
                    <input type="text" name="wr360_viewer_height" value="<?php echo get_option('wr360_viewer_height'); ?>"/>
                    <p class="description">Default viewer height in pixel.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Responsive Base Width (px)</th>
                <td>
                    <input type="text" name="wr360_viewer_basewidth" value="<?php echo get_option('wr360_viewer_basewidth'); ?>"/>
                    <p class="description">Optionally force viewer to scale its height relative to your original viewer width (base width).<br/> The setting usually applies when your viewer width is relative (%), i.e when your product page is responsive. Only works with wr360embed shortcodes.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Viewer Skin</th>
                <?php
                    $viewerSkin = get_option("wr360_viewer_skin");
                    $viewerSkins = array("basic", "thin", "round", "retina", "empty");
                ?>
                <td>
                    <select id="wr360_viewer_skin" name="wr360_viewer_skin">
                        <?php foreach($viewerSkins as $skin):?>
                            <?php $selected = ($viewerSkin == $skin) ? 'selected="selected"' : '' ?>
                            <option value="<?php echo $skin?>" <?php echo $selected ?> ><?php echo $skin ?></option>
                        <?php endforeach?>
                    </select>
                    <p class="description">Selection of out-of-the-box viewer skins.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">prettyPhoto Skin</th>
                <?php
                    $popupSkin = get_option("wr360_popup_skin");
                    $popupSkins = array("default", "light_rounded", "dark_rounded", "dark_square", "light_square", "facebook");
                ?>
                <td>
                    <select id="wr360_popup_skin" name="wr360_popup_skin">
                        <?php foreach($popupSkins as $skin):?>
                            <?php $selected = ($popupSkin == $skin) ? 'selected="selected"' : '' ?>
                            <option value="<?php echo $skin?>" <?php echo $selected ?> ><?php echo $skin ?></option>
                        <?php endforeach?>
                    </select>
                    <p class="description">Selection of prettyPhoto popup skins. Only applies to wr360popup shortcodes.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">Master Config URL (PRO)</th>
                <td>
                    <input type="text" name="wr360_master_config" class="regular-text code" value="<?php echo get_option('wr360_master_config'); ?>"/>
                    <p class="description">Master Config allows having just a single XML configuration file for all 360 views in your WordPress setup and then only use the rootpath parameter in your shortcodes, <br/>pointing to the asset folder for each view on your server (or CDN).
                        The asset folder is usually a single folder that you will find under the published folder created by SpotEditor under 360_assets.
                    </p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">License Path</th>
                <td>
                    <input type="text" name="wr360_license_path" value="<?php echo get_option('wr360_license_path'); ?>"/>
                    <p class="description">URL path to license.lic on this server (PRO and Enterprise). Click <a href="http://www.webrotate360.com/360-product-viewer-buy.html" target="_blank">HERE</a> for more details.</p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row">I'm using images with opacity</th>
                <td>
                    <?php $checkedVal = get_option('wr360_transparent_png');?>
                    <?php $checkedFlg = ($checkedVal) ? 'checked="checked"' : '' ?>
                    <input type="checkbox" name="wr360_transparent_png" <?php echo $checkedFlg; ?>/>
                    <p class="description">Check here if your 360 images have opacity to disable conflicting Firefox optimization. Note that JPG images are usually better suited for 360 views than PNG, etc.</p>
                </td>
            </tr>
        </table>
        <?php submit_button() ?>
    </form>
</div>