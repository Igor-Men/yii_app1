<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
/* @var $blogs*/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\LinkPager;
?>

<div id="doc3" class="yui-t7">
    <!--middle content-->
    <div id="bd">
        <div class="yui-g main-box">
            <div class="content">
                <?php foreach ($blogs as $blog): ?>
                <div class="post">
                    <h3><a href="#"><?= $blog->title ?></a></h3>
                    <p class="author">Published by: <a href="#">admin</a></p>
                    <ul class="post-calendar">
                        <li><?=$blog->month ?></li>
                        <li class="day"><?=$blog->day?></li>
                    </ul>
                    <div class="entry">
                        <p><?=Html::img('/'.$blog->image) ?></p>
                        <p><?=$blog->content?></p>

                    </div><!-- end entry -->
                    <div class="post-bottom">
                        <ul class="post-bottom-categories">
                            <li>Categories: <a href="#">Blog</a></li>
                        </ul><!-- end post-bottom-categories -->
                        <ul class="post-bottom-tags">
                            <li>Tags: <a href="#">fermentum,</a></li>
                            <li><a href="#">quis,</a></li>
                            <li><a href="#">mattis quis,</a></li>
                            <li><a href="#">ualtricies id</a></li>
                        </ul><!-- end post-bottom-tags -->
                    </div>
                </div><!-- end post -->
                <?php endforeach; ?>
                <?= LinkPager::widget(['pagination' => $pagination]) ?>
            </div><!-- end main content -->

            <div class="sidebar">
                <div class="sidebar-item">
                    <ul class="social-icons">
                        <li><a class="twitter" href="#"></a></li>
                        <li><a class="facebook" href="#"></a></li>
                        <li><a class="linkedin" href="#"></a></li>
                        <li><a class="rss" href="#"></a></li>
                    </ul><!-- end social-icons-->
                </div>

                <div class="sidebar-item">
                    <h3>Recent Posts</h3>
                    <ul class="recent-posts">
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                        <li><a href="#">Suspendisse dictu m suscipit odio.</a></li>
                    </ul><!-- end recent-posts-->
                </div>

                <div class="sidebar-item">
                    <h3>Archives</h3>
                    <ul class="archives">
                        <li><a href="#">May 2010 (4)</a></li>
                        <li><a href="#">February 2010 (2)</a></li>
                        <li><a href="#">March 2010 (8)</a></li>
                        <li><a href="#">January 2010 (5)</a></li>
                        <li><a href="#">December 2009 (15)</a></li>
                    </ul><!-- end archives-->
                </div>

                <div class="sidebar-item">
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Suscipit odio (5)</a></li>
                        <li><a href="#">Nulla dui arcu (5)</a></li>
                        <li><a href="#">Suscipit odio (5)</a></li>
                        <li><a href="#">Nulla dui arcu (5)</a></li>
                        <li><a href="#">Suscipit odio (5)</a></li>
                    </ul><!-- end categories-->
                </div>

                <div class="sidebar-item">
                    <div class="cafeteria-hours">
                        <h3>Cafeteria Hours</h3>
                        <ul class="cafeteria-hours-content">
                            <li><h3 class="shedule-title">Breakfast</h3></li>
                            <li><label>Monday - Friday</label><span>11:00 am - 03:00 pm</span></li>
                            <li><label>Monday - Friday</label><span>11:00 am - 03:00 pm</span></li>
                        </ul>
                        <ul class="cafeteria-hours-content">
                            <li><h3 class="shedule-title">Breakfast</h3></li>
                            <li><label>Monday - Friday</label><span>11:00 am - 03:00 pm</span></li>
                            <li><label>Monday - Friday</label><span>11:00 am - 03:00 pm</span></li>
                        </ul>
                    </div><!-- end cafeteria-hours-->
                </div>


            </div><!-- end sidebar -->
        </div><!-- end yui-g main-box -->

    </div><!-- end bd -->


</div><!--end doc3-->
