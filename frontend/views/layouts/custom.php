<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

    <body>
    <?php $this->beginBody() ?>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/">
                        <img class="logo-1" src="img/logo.png" alt="">
                        <img class="logo-2" src="img/logo-2.png" alt="">
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
                            <li class="nav-item" onclick="highlite(this);"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item" onclick="highlite(this);"><a class="nav-link" href="/about">About</a></li>
                            <li class="nav-item" onclick="highlite(this);"><a class="nav-link" href="/menu">Menu</a></li>
                            <li class="nav-item" onclick="highlite(this);"><a class="nav-link" href="/book-table">Book a table</a></li>
                            <li class="nav-item" onclick="highlite(this);"><a class="nav-link" href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h1><?= $this->title ?></h1>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="<?= $this->params['page_url'] ?>"><?= $this->title ?></a>
                    </div>
                </div>
            </div>
            <div class="shape shape1"></div>
            <div class="shape shape2"></div>
            <div class="shape shape3"></div>
            <div class="shape shape4"></div>
            <div class="shape shape5"></div>
            <div class="shape shape6"></div>
            <div class="shape shape7"></div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    <?= $content ?>

    <!--================ start footer Area  =================-->
    <footer class="footer-area p-5">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <script type="text/javascript">
        $(document).ready(function() {
            var url = window.location;
            var element = $('ul.sidebar-menu a').filter(function() {
                return this.href == url || url.href.indexOf(this.href) == 0; }).parent().addClass('active');
            if (element.is('li')) {
                element.addClass('active').parent().parent('li').addClass('active')
            }
        });
    </script>


    <?php $this->endBody() ?>
    </body>

</html>
<?php $this->endPage() ?>
