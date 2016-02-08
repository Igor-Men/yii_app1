<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 08.02.16
 * Time: 21:38
 */


namespace app\modules\admin\assets;
use yii\web\AssetBundle;


class AppAssetAdmin extends AssetBundle {


    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/public/reset-fonts.css',
        '/public/gt-styles.css'
    ];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}