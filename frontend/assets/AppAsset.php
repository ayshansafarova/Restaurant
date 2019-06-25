<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.css",
        "vendors/linericon/style.css",
        "css/font-awesome.min.css",
        "vendors/owl-carousel/owl.carousel.min.css",
        "https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css",
        "vendors/nice-select/css/nice-select.css",
        "vendors/animate-css/animate.css",
        "vendors/popup/magnific-popup.css",
        "vendors/swiper/css/swiper.min.css",
        "vendors/scroll/jquery.mCustomScrollbar.css",
        "css/style.css",
        "css/responsive.css",
    ];
    public $js = [
        "/js/jquery-3.2.1.min.js",
        "/js/popper.js",
        "/js/bootstrap.min.js",
        "/js/stellar.js",
        "/js/jquery.lightbox.js",
        "/vendors/nice-select/js/jquery.nice-select.min.js",
        "/vendors/isotope/imagesloaded.pkgd.min.js",
        "/vendors/isotope/isotope-min.js",
        "/vendors/owl-carousel/owl.carousel.min.js",
        "/js/jquery.ajaxchimp.min.js",
        "/vendors/counter-up/jquery.waypoints.min.js",
        "/vendors/counter-up/jquery.counterup.js",
        "/js/mail-script.js",
        "/vendors/popup/jquery.magnific-popup.min.js",
        "/vendors/swiper/js/swiper.min.js",
        "/vendors/scroll/jquery.mCustomScrollbar.js",
        "http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js",
        "/js/theme.js"
    ];
    public $depends = [

    ];
}
