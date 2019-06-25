<?php

/* @var $this yii\web\View */

$this->title = 'Food Bar';
$current_id = null;
?>
<!--================Offcanvus Menu Area =================-->
<div class="side_menu">
    <a class="logo" href="#">
        <img src="img/logo.png" alt="">
    </a>
    <ul class="list menu_right">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="/menu">Menu</a>
        </li>
        <li>
            <a href="/book-table">Book a table</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
    </ul>
</div>
<!--================End Offcanvus Menu Area =================-->

<!--================Header Menu Area =================-->
<header class="header_area home_menu">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="img/logo-2.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/book-table">Book a table</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Canvus Menu Area =================-->
<div class="canvus_menu">
    <div class="container">
        <div class="float-right">
            <div class="toggle_icon">
                <span></span>
            </div>
        </div>
    </div>
</div>
<!--================End Canvus Menu Area =================-->

<!--================ Start banner section =================-->
<section class="home_banner relative">
    <div class="container-fluid pl-0">
        <div class="row justify-content-center align-items-center full_height">
            <div class="col-lg-6 p-0">
                <div class="banner_left d-flex justify-content-center flex-column">
                    <h1><?= $main_page->main_title ?></h1>
                    <p><?= $main_page->main_description ?>
                    </p>
                    <a class="main_btn" href="<?= $main_page->main_button_url ?>"><?= $main_page->main_button_label ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_right d-flex justify-content-center align-items-center">
                    <div class="round-planet planet">
                        <div class="round-planet planet2">
                            <div class="round-planet planet3">
                                <div class="shape shape1"></div>
                                <div class="shape shape2"></div>
                                <div class="shape shape3"></div>
                                <div class="shape shape4"></div>
                                <div class="shape shape5"></div>
                                <div class="shape shape6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="face-img img-fluid" src="img/home-banner.png" alt="">
</section>
<!--================ End banner section =================-->

<!--================ Top Dish Area =================-->
<section class="top_dish_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title position-relative">
                    <h1>Our Top Rated Dishes</h1>
                    <hr>
                    <div class="round-planet planet">
                        <div class="round-planet planet2">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($ratedDishes as $dish): ?>
            <div class="single_dish col-lg-4 col-md-6 text-center">
                <div class="thumb">
                    <img class="img-fluid" src="<?= $dish->image ?>" alt="">
                </div>
                <h4><?= $dish->food_name ?></h4>
                <p>
                    <?= $dish->ingredients ?>
                </p>
                <h5 class="price">$<?= $dish->price ?></h5>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--================ End Top Dish Area =================-->

<!--================ Menu Area =================-->
<section class="menu_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title position-relative">
                    <h1>Our favourite Menu</h1>
                    <hr>
                    <div class="round-planet planet">
                        <div class="round-planet planet2">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row menu_inner">
            <?php if ($count % 2 == 0): ?>
                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="menu_list">
                        <ul class="list">
                            <?php for ($i = 0; $i < count($menu); $i++): ?>
                                <li>
                                    <h4><?= $menu[$i]['food_name'] ?>
                                        <span>$<?= $menu[$i]['price'] ?></span>
                                    </h4>
                                    <p><?= $menu[$i]['ingredients'] ?></p>
                                </li>
                                <?php
                                if ($i == (($count / 2) - 1))
                                {
                                    $current_id = ++$i;
                                    break;
                                }
                                ?>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-10 col-xl-6">
                    <div class="menu_list pr-0">
                        <ul class="list">
                            <?php for ($i = $current_id; $i < count($menu); $i++): ?>
                                <li>
                                    <h4><?= $menu[$i]['food_name'] ?>
                                        <span>$<?= $menu[$i]['price'] ?></span>
                                    </h4>
                                    <p><?= $menu[$i]['ingredients'] ?></p>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-12 col-lg-10 col-xl-12" style="padding-left: 20%;padding-right: 20%;">
                    <div class="menu_list pr-0">
                        <ul class="list">
                            <?php for ($i = 0; $i < count($menu); $i++): ?>
                                <li>
                                    <h4><?= $menu[$i]['food_name'] ?>
                                        <span>$<?= $menu[$i]['price'] ?></span>
                                    </h4>
                                    <p><?= $menu[$i]['ingredients'] ?></p>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--================End Menu Area =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area p-5">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
               <?= $footer->footer_content ?>
            </p>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
