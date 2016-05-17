<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/bootstrap.min.css',
        'css/layout.css',
        'css/reponsive.css',
        'css/tinycarousel.css',
        'css/jquery.simpleLens.css',
        'css/jquery.simpleGallery.css',
        'css/font-awesome.min.css',
        'css/custom.css',
        'css/style.css'
    ];
    public $js       = [
        'js/jquery.tinycarousel.min.js',
        'js/script.js',
        'js/bootstrap.min.js'
    ];
    public $depends  = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
