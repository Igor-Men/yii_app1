<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>


<!--middle content-->
<div id="bd">

    <div class="yui-g main-box">

        <div class="top-tagline">
            <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel</p>
        </div><!--end top tagline -->

        <div class="breadcrumbs">
            You are here:
            <a href="index.html" style="color:#561c40; font-weight:bold;">Home</a> &raquo; <a href="contact.html">Contact</a>
        </div><!--end breadcrumbs-->

    </div><!--end yui-g main-box-->


    <div class="yui-g main-box">

        <div class="content">

            <h1>Contact</h1>

            <div class="page">
                <p>Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien. Vivamus convallis rutrum lorem. Praesent massa lectus, vulputate sed, vestibulum eu, vestibulum eu, dolor. Integer ante. Donec imperdiet. Proin ac odio in urna cursus ultricies. Quisque tincidunt lacus in ante. </p>

                <form action="php/mail.php" method="post" enctype="multipart/form-data">
                    <div class="book-table-form">
                        <label>*Your name:</label>
                        <input class="input-field" name="name" id="name1" />

                        <label>*Your Email:</label>
                        <input class="input-field" name="email" id="email1" />

                        <label>Subject:</label>
                        <input class="input-field" name="subject" id="subject" />

                        <label>Your message:</label>
                        <textarea class="textarea-field" name="message" id="message1" cols="80" rows="5"></textarea>

                        <br/>
                        <input type="submit" name="" class="submit" value="Send Email" />
                        <input type="reset" name="" class="reset" value="Clear form" />
                    </div>
                </form>

                <div class="google-map">
                    <h3>Find us on Google Maps</h3>
                    <div class="google-map-background">
                        <div id="google-map-location"></div>
                    </div>
                </div><!--end google-map-->

            </div><!-- end page -->
        </div><!-- end content -->

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
                <div class="book-table-sidebar">
                    <h3>Book a Table</h3>
                    <p>Suspendisse dictum suscipit dictum suscipit.</p>
                    <a href="book-table.html"><img src="/public/images/book-now-sidebar.jpg" width="137" height="38" alt="Book Now!" /></a>
                </div><!--end book-table-sidebar-->
            </div>

            <div class="sidebar-item">
                <h3>Address</h3>
                <ul class="address">
                    <li>
                        <span>Phone:</span>
                        <p>+123.456.789</p>
                        <span>Fax:</span>
                        <p>+123.456.789</p>
                        <span>Email:</span>
                        <p><a href="mailto:office@something.com">office@something.com</a></p>
                    </li>
                </ul><!--end address-->
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
