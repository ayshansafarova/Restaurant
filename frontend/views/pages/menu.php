<?php

/* @var $this yii\web\View */

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;

$current_id = null;

?>

<!--================ Menu Area =================-->
<section class="menu_area white">
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
