<?php

/* @var $this yii\web\View */


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="about_story_area section_gap">
    <div class="container">
        <div class="row story_inner">
            <div class="col-lg-12">
                <div class="about-text">
                    <h2><?= $about->title ?></h2>
                    <hr>
                    <p><?= $about->description ?></p>
                    <a class="main_btn" href="<?= $about->button_link ?>"><?= $about->button_label ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
