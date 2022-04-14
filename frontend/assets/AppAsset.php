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
        'css/site.css',
        'css/animate.css',
        'css/classy-nav.min.css',
        'css/core-style.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/owl.carousel.css',
        'css/jquery-ui.min.css'
        //'css/bootstrap.min.css',

    ];

    public $js = [
        'js/active.js',
        'js/classy-nav.min.js',
        'js/map-active.js',
        'js/plugins.js',
        'js/popper.min.js'
        //'js/bootstrap.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset'
    ];
}
