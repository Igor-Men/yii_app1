<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $content string */
?>


<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <?= Html::csrfMetaTags() ?>
        <title>Admin panel</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="Expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="Pragma" content="no-cache" />
        <link rel="stylesheet" href="/public/reset-fonts.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="/public/gt-styles.css" type="text/css" media="screen, projection" />
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

     <!-- head -->
    <div class="gt-hd clearfix">
        <!-- logo -->
        <div class="gt-logo">
            Admin panel
        </div>
        <!-- / logo -->

        <!-- navigation -->
        <div class="gt-nav">
            <ul>
                <li><a href="<?= Url::to(['/admin/index']) ?>">Home</a></li>
                <li><a href="<?= Url::to(['/admin/blog']) ?>">Blog</a></li>
            </ul>
        </div>
        <!-- / navigation -->

    </div>
    <!-- / head -->
        <?= $content ?>
        <!-- footer -->
    <div class="gt-footer">
        <p>Copyright &copy; 2016 maesh.kyryll@gmail.com</p>
    </div>
    <!-- /footer -->


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>