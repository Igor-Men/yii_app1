<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- head -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title of page -->
<!--    <title>Themelock.com - Free Themes & Templates</title>-->

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <style type="text/css">
        #doc3{margin:auto;}
    </style>

</head>

<body>
<?php $this->beginBody() ?>
<div id="doc3" class="yui-t7">

    <!--header-->
    <div id="hd">
        <h1>Header</h1>

        <!--wrapper-->
        <div class="wrapper">

            <div class="logo">
                <a href="index.html"><img src="public/images/logo.png" width="376" height="53" alt="" /></a>
            </div><!--end logo-->

            <div class="menu">
                <ul class="sf-menu">
                    <li><a class="menu-current" href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="<?= Url::to(['/site/gallary']) ?>">Gallery</a></li>
                    <li><a href="<?= Url::to(['/site/menu']) ?>">Menu</a>
                        <ul>
                            <li><a href="#">Breakfast</a></li>
                            <li><a href="#">Lunch</a></li>
                            <li><a href="#">Dinner</a></li>
                            <li><a href="#">Desert</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Special offers</a></li>
                    <li><a href="#">Review</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['site/blog']); ?>">Blog</a></li>
                    <li><a href="<?= Url::to(['/site/contact']) ?>">Contact</a></li>

                </ul>
            </div><!--end menu-->

        </div><!--end wrapper-->


    </div><!--end header-->


    <?= $content ?>
    <!--footer-->
    <div id="ft">
        <div class="wrapper">
            <div class="news footer-boxs">
                <h3>News</h3>
                <ul class="news-content">
                    <li>
                        <a class="news-title" href="#">Suspendisse dictum suscipit odio</a>
                        Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies. Nulla dui arcu, fermentum.
                        <ul class="calendar">
                            <li>Apr</li>
                            <li class="day">10</li>
                        </ul>
                    </li>
                    <li>
                        <a class="news-title" href="#">Suspendisse dictum suscipit odio</a>
                        Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies. Nulla dui arcu, fermentum.
                        <ul class="calendar">
                            <li>Apr</li>
                            <li class="day">10</li>
                        </ul>
                    </li>
                </ul>
            </div><!--end news footer-boxs-->

            <div class="review footer-boxs">
                <h3>Review</h3>
                <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien. Vivamus convallis rutrumorem. Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum.</p>
                <span>Proin Tortor, Lorem</span>
            </div><!-- end review footer-boxs-->

            <div class="contact-us footer-boxs">
                <h3>Contact Us</h3>
                <form enctype="multipart/form-data" method="post" action="php/mail.php" id="contactform">
                    <p>
                        <label for="name">Your name:</label>
                        <input id="name" name="name" class="short" />
                    </p>
                    <p>
                        <label for="email">Your email:</label>
                        <input id="email" name="email" class="short" />
                    </p>
                    <p>
                        <label for="message">Your message:</label>
                        <textarea cols="1" rows="2" id="message" name="message"></textarea>
                    </p>

                    <p>
                        <input type="submit" value="Send" class="submit" name="" />
                        <input type="reset" value="Reset" class="reset" name="" />
                    </p>
                </form>
            </div><!--end contact-us footer-boxs-->

            <div class="about footer-boxs">
                <h3>About</h3>
                <p>
                    <a href="#"><img src="public/assets/about-image.jpg" alt="About Monmarthe Cafeteria" title="About Us image" width="80" height="80" /></a>
                    Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies. Nulla dui arcu, fermentum. Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien.
                </p>
            </div><!--end about footer-boxs-->

        </div><!--end wrapper-->

        <div class="footer-bottom">
            <p>&copy; 2010 Monmarthe</p>
            <ul>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li class="separators"><a href="#">Copyrights</a></li>
                <li><a href="#">Site Map</a></li>
            </ul>
        </div><!--end footer-bottom-->

    </div><!--end footer-->
</div><!--end doc3-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
