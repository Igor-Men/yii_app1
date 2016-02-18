<?php

namespace app\controllers;

use app\models\RegForm;
use app\modules\admin\models\Contact;
use app\modules\admin\models\Blog;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
//use app\models\ContactForm;
use app\modules\admin\models\Banners;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $banners = Banners::find()->all();
        $arrBanners = array();
        foreach($banners as $key => $banner) {
            $arrBanners[] = [
                'image' => $banner->image,
                'content' => $banner->content,
                'title' => $banner->title
            ];
        }


        return $this->render('index',
                [
                    'arrBanners' => $arrBanners
                ]
            );
    }

    public function actionLogin()
    {
        /*if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }*/

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {

        $model = new Contact();

        if (Yii::$app->request->post('ok')) {
            $form = Yii::$app->request->post();
            $model->name = $form['name'];
            $model->email = $form['email'];
            $model->subject = $form['subject'];
            $model->message = $form['message'];
            $model->save();
        }
        return $this->render('contact', [
            'model' => $model
        ]);
    }

    public function actionMenu()
    {
        return $this->render('menu');
    }

    public function actionGallary()
    {
        return $this->render('gallary');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionReg() {
        $model = new RegForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if ($model->reg()):
                return $this->goHome();
            else:
                Yii::$app->session->setFlash('error', 'Возникла ошибка при регистрации');
                Yii::$app->error('Ошибка при регитсрации');
                return $this->refresh();
            endif;
        }

        return $this->render(
            'reg',
            [
                'model' => $model
            ]
        );
    }

    public function actionBlog()
    {
        $query = Blog::find();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);

        $blogs = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('blog',[
            'blogs' => $blogs,
            'pagination' => $pagination
        ]);
    }
}