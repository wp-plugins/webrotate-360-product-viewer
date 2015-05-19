<?php
/*
    Plugin Name: WebRotate 360 Product Viewer for WordPress
    Plugin URI: http://www.webrotate360.com/360-product-viewer.html
    Description: WebRotate 360 Product Viewer WordPress Integration
    Version: 2.5.2
    Author: WebRotate 360 LLC
    Author URI: http://www.webrotate360.com
    License: GPLv2
*/

    class WR360DefaultsConfig
    {
        public $viewerWidth;
        public $viewerHeight;
        public $baseWidth;
        public $config;
        public $viewerSkin;
        public $popupSkin;
        public $licensePath;
        public $name;
        public $rootPath;
        public $isPopupGallery;
        public $zIndexLayers = true;

        public function init_header()
        {
            $this->viewerSkin = get_option("wr360_viewer_skin");
            if (empty($this->viewerSkin))
                $this->viewerSkin = "basic";

            $this->popupSkin = get_option("wr360_popup_skin");
            if (empty($this->popupSkin) || ($this->popupSkin == "default"))
                $this->popupSkin = "pp_default";

            $this->licensePath = get_option("wr360_license_path");
            if (empty($this->licensePath))
                $this->licensePath = plugins_url("webrotate-360-product-viewer/license.lic");
        }

        public function init_shortcode($atts)
        {
            $this->init_header();
            $extract = shortcode_atts(
                array(
                    "name"         => "",
                    "width"        => "",
                    "height"       => "",
                    "rootpath"     => "",
                    "config"       => "",
                    "basewidth"    => "",
                    "gallery"      => "false",
                    "imageopacity" => "",
                    "viewerskin"   => ""), $atts);

            $this->viewerWidth  = str_ireplace("px", "", get_option("wr360_viewer_width"));
            $this->viewerHeight = str_ireplace("px", "", get_option("wr360_viewer_height"));
            $this->baseWidth    = str_ireplace("px", "", get_option("wr360_viewer_basewidth"));
            $this->config       = get_option("wr360_master_config");
            $imgOpacityOnFlag   = get_option("wr360_transparent_png");

            if (empty($this->viewerWidth))
                $this->viewerWidth = 300;
            if (empty($this->viewerHeight))
                $this->viewerHeight = 300;
            if (empty($this->baseWidth))
                $this->baseWidth = 0;
            if (!empty($imgOpacityOnFlag))
                $this->zIndexLayers = false;

            if (!empty($extract["width"]))
                $this->viewerWidth = str_ireplace("px", "", $extract["width"]);
            if (!empty($extract["height"]))
                $this->viewerHeight = str_ireplace("px", "", $extract["height"]);
            if (!empty($extract["basewidth"]))
                $this->baseWidth = str_ireplace("px", "", $extract["basewidth"]);
            if (!empty($extract["config"]))
                $this->config = $extract["config"];
            if (!empty($extract["imageopacity"]))
                $this->zIndexLayers = ($extract["imageopacity"] !== "true");
            if (!empty($extract["viewerskin"]))
                $this->viewerSkin = $extract["viewerskin"];

            $this->name = preg_replace('/\s+/', '', $extract["name"]);
            $this->rootPath = $extract["rootpath"];

            $this->isPopupGallery = $extract["gallery"];
            if (!empty($this->isPopupGallery))
                $this->isPopupGallery = ($this->isPopupGallery === "true");
        }
    }

    add_shortcode ("wr360embed",         "wr360embed_shortcode_hanlder");
    add_shortcode ("wr360popup",         "wr360popup_shortcode_hanlder");
    add_action    ("admin_init",         "admin_register_webrotate360_settings");
    add_action    ("admin_menu",         "admin_webrotate360_menu");
    add_action    ("wp_enqueue_scripts", "add_action_webrotate_styles");
    add_filter    ("the_content",        "add_filter_webrotate_embed_viewer");

    function admin_webrotate360_menu()
    {
        add_options_page(
            "WebRotate 360 Product Viewer Options",
            "WebRotate 360",
            "manage_options",
            "webrotate360-menu",
            "admin_webrotate360_options");
    }

    function admin_webrotate360_options()
    {
        include("optionspage.php");
    }

    function admin_register_webrotate360_settings()
    {
        register_setting("webrotate360-settings-group", "wr360_viewer_width");
        register_setting("webrotate360-settings-group", "wr360_viewer_height");
        register_setting("webrotate360-settings-group", "wr360_viewer_basewidth");
        register_setting("webrotate360-settings-group", "wr360_viewer_skin");
        register_setting("webrotate360-settings-group", "wr360_popup_skin");
        register_setting("webrotate360-settings-group", "wr360_master_config");
        register_setting("webrotate360-settings-group", "wr360_license_path");
        register_setting("webrotate360-settings-group", "wr360_transparent_png");
    }

    function wr360popup_shortcode_hanlder($atts, $content)
    {
        $defConfig = new WR360DefaultsConfig();
        $defConfig->init_shortcode($atts);

        if ($defConfig->isPopupGallery)
        {
            $replace = "<a id='%s' href='%s?config=%s&amp;root=%s&amp;height=%s&amp;iframe=true&amp;width=%s&amp;height=%s&amp;viewerskin=%s' rel=prettyPhoto[iframe]>";
        }
        else
        {
            $replace = "<a id='%s' href='%s?config=%s&amp;root=%s&amp;height=%s&amp;iframe=true&amp;width=%s&amp;height=%s&amp;viewerskin=%s' rel=prettyPhoto>";
        }

        $replace .= $content;
        $replace .= "</a>";

        return (sprintf(
            $replace,
            'wr360' . $defConfig->name,
            plugins_url("webrotate-360-product-viewer/viewloader_" . $defConfig->viewerSkin . ".html"),
            urlencode($defConfig->config),
            urlencode($defConfig->rootPath),
            $defConfig->viewerHeight,
            str_ireplace("%", "", $defConfig->viewerWidth),
            $defConfig->viewerHeight,
            $defConfig->viewerSkin
        ));
    }

    function wr360embed_shortcode_hanlder($atts, $content)
    {
        $defConfig = new WR360DefaultsConfig();
        $defConfig->init_shortcode($atts);

        $replace  = "";
        $replace .= "<div id='%s' class='webrotate360' style='width:%s; height:%s;'>";
        $replace .= "<div id='%s' class='wr360_player'></div></div>";
        $replace .= "<script language='javascript' type='text/javascript'>";
        $replace .= "jQuery(document).ready(function(){jQuery('#' + '%s').rotator({graphicsPath: '%s', licenseFileURL: '%s', rootPath:'%s', configFileURL:'%s', responsiveBaseWidth:%s, zIndexLayersOn:%s});});";
        $replace .= "</script>";

        return (sprintf(
            $replace,
            'wr360' . $defConfig->name,
            (strpos($defConfig->viewerWidth, '%') === FALSE) ? $defConfig->viewerWidth . 'px' : $defConfig->viewerWidth,
            $defConfig->viewerHeight . "px",
            'wr360' . $defConfig->name .'_playerid',
            'wr360' . $defConfig->name .'_playerid',
            plugins_url("webrotate-360-product-viewer/imagerotator/html/img/" . $defConfig->viewerSkin),
            $defConfig->licensePath,
            $defConfig->rootPath,
            $defConfig->config,
            $defConfig->baseWidth,
            $defConfig->zIndexLayers ? "true" : "false"));
    }

    function add_action_webrotate_styles()
    {
        $defConfig = new WR360DefaultsConfig();
        $defConfig->init_header();

        wp_enqueue_script  ("jquery");
        wp_register_script ("prettyphotojs", plugins_url("prettyphoto/js/jquery.prettyPhoto.js", __FILE__));
        wp_register_style  ("prettyphotocss", plugins_url("prettyphoto/css/prettyphoto.css", __FILE__));
        wp_enqueue_script  ("prettyphotojs");
        wp_enqueue_style   ("prettyphotocss");
        wp_register_script ("wr360wpscript", plugins_url("webrotate360.js", __FILE__));
        wp_enqueue_script  ("wr360wpscript");
        wp_register_script ("wr360script", plugins_url("imagerotator/html/js/imagerotator.js", __FILE__));
		wp_register_style  ("wr360style", plugins_url("imagerotator/html/css/" . $defConfig->viewerSkin . ".css", __FILE__));
        wp_enqueue_style   ("wr360style");
        wp_enqueue_script  ("wr360script");
    }

    function add_filter_webrotate_embed_viewer($content)
    {
        $defConfig = new WR360DefaultsConfig();
        $defConfig->init_header();

        $content .= "<script language='javascript' type='text/javascript'>";
        $content .= "function getWR360License(){return '" . $defConfig->licensePath . "';}";
        $content .= "function getWR360PopupSkin(){return '" . $defConfig->popupSkin . "';}";
        $content .= "function getWR360GraphicsPath(){return '" . plugins_url("webrotate-360-product-viewer/imagerotator/html/img/" . $defConfig->viewerSkin) . "';}";
        $content .= "</script>";
		return ($content);
    }
