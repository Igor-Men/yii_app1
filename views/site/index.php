<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application1';
?>

<div id="bd">

    <div class="yui-g main-box">

        <!-- carousel -->

        <!-- "previous page" action -->
        <a href="javascript:void();" class="prev browse left"></a>

        <!-- root element for scrollable -->
        <div class="scrollable-bg">
            <div class="scrollable" id="chained">

                <!-- root element for the items -->
                <div class="items">
                    <div><img src="public/assets/slide-1.jpg" alt="slide-1" /></div>
                    <div><img src="public/assets/slide-2.jpg" alt="slide-2" /></div>
                    <div><img src="public/assets/slide-3.jpg" alt="slide-3" /></div>
                </div>

            </div><!--end scrollable-->
        </div> <!--end scrollable-bg-->

        <!-- "next page" action -->
        <a href="javascript:void();" class="next browse right"></a>
        <br clear="all" />

        <div class="book-table">
            <h3>Book a Table</h3>
            <p>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi.</p>
            <a href="book-table.html"><img src="public/images/book-now.jpg" width="140" height="38" alt="Book Now!" /></a>
        </div><!--end book-table-->

        <div class="tagline">
            <h3>Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel. </h3>
        </div><!--end tagline-->

    </div><!--end yui-g main-box-->

    <div class="yui-g">


        <!-- middle content - today special, menu, hours -->
        <div class="wrapper">

            <div class="today-special">
                <h3>Today's Special</h3>
                <div class="today-special-content">
                    <ul>
                        <li>
                            <span class="today-special-image"><img src="public/assets/today-special-image158x158.jpg" width="158" height="158" title="Today Special" alt="Today Special image"/></span>
                            Suspendisse dictum suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies id, justo. Nulla facilisi. Proin tortor sem, vehicula vitae, facilisis vel, accumsan a, sapien. Vivamus convallis rutrum lorem.
                            <a class="details-arrow" href="#">Read more </a>
                        </li>
                    </ul>
                </div><!--end today-special-content-->
            </div><!--end today-special-->

            <div class="latest-menu">
                <h3>Latest Menu</h3>
                <div class="latest-menu-content">
                    <ul>
                        <li>
                            <span class="latest-menu-image"><img src="public/assets/latest-menu-image53x53.jpg" width="53" height="53" title="Latest menu" alt="Latest menu image"/></span>
                            <a class="latest-menu-title" href="#">French Wedge – lorem</a>
                            Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies.
                        </li>
                        <li>
                            <span class="latest-menu-image"><img src="public/assets/latest-menu-image53x53.jpg" width="53" height="53" title="Latest menu" alt="Latest menu image"/></span>
                            <a class="latest-menu-title" href="#">French Wedge – lorem</a>
                            Suspendisse dictu m suscipit odio. Nulla dui arcu, fermentum quis, mattis quis, ultricies.
                        </li>
                    </ul>
                    <a class="details-arrow" href="#">Look for more </a>

                </div><!--end latest-menu-content-->
            </div><!--end latest-menu-->

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

        </div><!-- end wrapper -->
    </div><!-- end yui-g -->

</div><!-- end bd -->