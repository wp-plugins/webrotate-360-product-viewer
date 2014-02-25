<?php
/*
Plugin Name: WebRotate 360 Product Viewer for WordPress
Plugin URI: http://www.webrotate360.com/360-product-viewer.html
Description: WebRotate 360 Product Viewer WordPress Integration
Version: 2.0
Author: WebRotate 360 LLC
Author URI: http://www.webrotate360.com
License: GPLv2
*/
?>
<?php

    add_shortcode("wr360embed", "wr360embed_shortcode_hanlder");
    add_shortcode("wr360popup", "wr360popup_shortcode_hanlder");

    add_action("wp_enqueue_scripts", "add_action_webrotate_styles");
    add_filter("the_content", "add_filter_webrotate_embed_viewer");

    function wr360popup_shortcode_hanlder($atts, $content)
    {
        $extract = shortcode_atts(
            array(
                'name' => '',
                'width' => '',
                'height' => '',
                'rootpath' => '',
                'config' => '',
                'gallery' => 'false'
            ), $atts);

		$height = 300;
		if (!empty($extract["height"]))
			$height = str_ireplace("px", "", $extract["height"]);
			
		$width = 300;
		if (!empty($extract["width"]))
			$width = str_ireplace("px", "", $extract["width"]);
			
        $replace  = "";
        if ( $extract["gallery"] == "true")
        {
            $replace .= "<a id='%s' href='%s?config=%s&amp;root=%s&amp;height=%s&amp;iframe=true&amp;width=%s&amp;height=%s' rel=prettyPhoto[iframe]>";
        }
        else
        {
            $replace .= "<a id='%s' href='%s?config=%s&amp;root=%s&amp;height=%s&amp;iframe=true&amp;width=%s&amp;height=%s' rel=prettyPhoto>";
        }

        $replace .= $content;
        $replace .= "</a>";

        return (sprintf(
            $replace,
            'wr360' . $extract["name"],
            plugins_url("webrotate-360-product-viewer/viewloader.html"),
            urlencode($extract["config"]),
            urlencode($extract["rootpath"]),
			$height,
            $width,
            $height
        ));
    }

    function wr360embed_shortcode_hanlder($atts, $content)
    {
        $extract = shortcode_atts(
                array(
                    'name' => '',
                    'width' => '',
                    'height' => '',
                    'rootpath' => '',
                    'config' => '',
					'basewidth' => ''
                    ), $atts);

		$baseWidth = 0;
		if (!empty($extract["basewidth"]))
			$baseWidth = str_ireplace("px", "", $extract["basewidth"]);
		
        $replace  = "";
        $replace .= "<div id='%s' class='webrotate360' style='width:%s; height:%s;'>";
        $replace .= "<div id='%s' class='wr360_player'></div></div>";
        $replace .= "<script language='javascript' type='text/javascript'>";
        $replace .= "jQuery(document).ready(function(){jQuery('#' + '%s').rotator({graphicsPath: '%s', licenseFileURL: '%s', rootPath:'%s', configFileURL:'%s', responsiveBaseWidth:%s});});";
        $replace .= "</script>";

        return (sprintf(
            $replace,
            'wr360' . $extract["name"],
            $extract["width"],
            $extract["height"],
            'wr360' . $extract["name"].'_playerid',
            'wr360' . $extract["name"].'_playerid',
            plugins_url("webrotate-360-product-viewer/imagerotator/html/img/basic"),
            plugins_url("webrotate-360-product-viewer/license.lic"),
            $extract["rootpath"],
            $extract["config"],
			$baseWidth));
    }


    function add_action_webrotate_styles()
    {
        wp_enqueue_script   ("jquery");

        wp_register_script  ("prettyphotojs", plugins_url("prettyphoto/js/jquery.prettyPhoto.js", __FILE__));
        wp_register_style   ("prettyphotocss", plugins_url("prettyphoto/css/prettyphoto.css", __FILE__));
        wp_enqueue_script   ("prettyphotojs");
        wp_enqueue_style    ("prettyphotocss");

        wp_register_script  ("wr360wpscript", plugins_url("webrotate360.js", __FILE__));
        wp_enqueue_script   ("wr360wpscript");

        wp_register_script  ("wr360script", plugins_url("imagerotator/html/js/imagerotator.js", __FILE__));
		wp_register_style   ("wr360style", plugins_url("imagerotator/html/css/basic.css", __FILE__));
        wp_enqueue_style    ("wr360style");
        wp_enqueue_script   ("wr360script");
    }

    function add_filter_webrotate_embed_viewer($content)
    {
        $content .= "<script language='javascript' type='text/javascript'>";
        $content .= "function getWR360License(){return '" . plugins_url("webrotate-360-product-viewer/license.lic") . "';}";
        $content .= "function getWR360GraphicsPath(){return '" . plugins_url("webrotate-360-product-viewer/imagerotator/html/img/basic") . "';}";
        $content .= "</script>";
		return ($content);
    }
?>