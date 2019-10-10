<?php


namespace frontend\assets;

use yii\web\AssetBundle;


class GalleryAsset extends AssetBundle
{
    public $css = [
        'css/gallery/style.css',
    ];

    public $js = [
        'js/isotope/jquery.isotope.js',
        'js/gallery/scripts.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}