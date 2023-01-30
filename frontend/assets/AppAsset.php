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
    ];
    public $js = [
        'assets/js/echarts.min.js',
        'assets/js/china.js',
        'assets/js/world.js',
    ];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap5\BootstrapAsset',
    // ];
}
