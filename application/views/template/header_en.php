<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Afghanistan Online Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?=base_url()?>styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>css/prettyPhoto.css" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?=base_url()?>js/core.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/ajax_core.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery-slidedeck.pack.lite.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery-prettyPhoto.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/jquery.nivo.slider.js"></script>
<!-- Gallery Specific Elements -->
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
</head>
<body>
<script type="text/javascript" >
function blink(selector){
    $(selector).fadeOut('slow', function(){
        $(this).fadeIn('slow', function(){
            blink(this);
        });
    });
}
blink('#msg');
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'random',
        slices:30,
        animSpeed:500,
        pauseTime:6000,
        startSlide:0, // Set starting Slide (0 index)
        directionNav: false, // Next and Prev
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3...
        controlNavThumbs:false, //Use thumbnails for Control Nav
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false, //Force manual transitions
        captionOpacity:0.8, //Universal caption opacity
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){} //Triggers after all slides have been shown
    });
});
</script>
<!-- End of header -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              