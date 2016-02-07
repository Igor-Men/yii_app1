<?php

namespace app\controllers;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public $layout = 'admin_index';

}
