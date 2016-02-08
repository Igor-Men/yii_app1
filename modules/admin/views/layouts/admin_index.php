<?php
use yii\helpers\Html;
use yii\bootstrap\BootstrapAsset;
use app\modules\admin\assets\AppAssetAdmin;
use yii\helpers\Url;

AppAssetAdmin::register($this);
BootstrapAsset::register($this);
?>


<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?= Html::csrfMetaTags() ?>
        <title>Admin panel</title>
        <?= $this->registerMetaTag([ 'charset'=>'utf-8']);?>
        <?= $this->registerMetaTag(['http-equiv'=>'content-type', 'content' => 'text/htm', 'charset'=>'utf-8']);?>
        <?= $this->registerMetaTag(['http-equiv'=>'Pragma', 'content' => 'no-cache',]);?>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="container">
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
                    <li><a href="<?= Url::to(['/admin/banner/index']) ?>">Banner</a></li>
                    <li><a href="<?= Url::to(['/admin/blog/index']) ?>">Blog</a></li>
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
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>