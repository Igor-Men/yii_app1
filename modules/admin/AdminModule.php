<?php

namespace app\modules\admin;

use yii\web\AssetBundle;

class AdminModule extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        $this->setAliases([
            '@AppAssetAdmin' => __DIR__ . '/assets'
        ]);

    }
}
