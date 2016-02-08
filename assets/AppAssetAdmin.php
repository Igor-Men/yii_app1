<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.02.16
 * Time: 21:38
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppAssetAdmin extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
//        'public/reset-fonts-grids.css',
//        'public/style.css',
//        'public/js/jquery.tools/scrollable-horizontal.css',
//        'public/js/jquery.tools/scrollable-buttons.css',
//        'public/js/jquery.tools/scrollable-navigator.css',
//        'public/js/jquery.uniform/uniform.default.css',
//        'public/js/jquery-ui-1.8.2.datepicker/smoothness/jquery-ui-1.8.2.custom.css',
//        'public/js/fancybox/jquery.fancybox-1.3.1.css'
    ];
    public $js = [
//        'public/js/jquery-1.4.2.min.js',
//        'public/js/fancybox/jquery.mousewheel-3.0.2.pack.js',
//        'public/js/fancybox/jquery.fancybox-1.3.1.js',
//        'public/js/jquery-ui-1.8.2.datepicker/jquery-ui-1.8.2.custom.min.js',
//        'public/js/jquery.tools/jquery.tools.min.js',
//        'public/js/jquery.uniform/jquery.uniform.min.js',
//        'public/js/scripts.js',
//        'public/js/superfish.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}