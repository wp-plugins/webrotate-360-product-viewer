function wr360QueryGetParameterByName(name){
    var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
}

jQuery(document).ready(function(){
    var popup360Elm = jQuery("#wr360PlayerId20");
    if (popup360Elm.length == 1)
    {
        var configHeight = parseInt(wr360QueryGetParameterByName("height"));
        var iframeHeight = configHeight;

        var iframeElm = jQuery("#wr360frame_id", window.parent.document);
        if (iframeElm.length > 0)
            iframeHeight = iframeElm.attr("height");

        var realHeight = (iframeHeight < configHeight) ? iframeHeight : configHeight;
        jQuery(".viewerbox").css("height", realHeight + "px");

        popup360Elm.rotator({
            licenseFileURL : window.parent.getWR360License(),
            graphicsPath   : window.parent.getWR360GraphicsPath(),
            configFileURL  : wr360QueryGetParameterByName("config"),
            rootPath       : wr360QueryGetParameterByName("root")
        });
    }
    else
    {
        if ((typeof(jQuery.fn.prettyPhoto) !== "undefined") && (typeof(getWR360PopupSkin) !== "undefined"))
		{
            jQuery("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:0, deeplinking:false, theme:getWR360PopupSkin()});
		}
    }
});
