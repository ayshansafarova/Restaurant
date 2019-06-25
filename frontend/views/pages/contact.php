<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--================Contact Area =================-->
<section class="contact_area p_120">
    <p class="text-center" style="color: green;"><?= Yii::$app->session->getFlash('success') ?></p>
    <p class="text-center" style="color: red;"><?= Yii::$app->session->getFlash('error') ?></p>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6><?= $contacts->country_state ?></h6>
                        <p><?= $contacts->address ?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="tel:<?= $contacts->phone_number ?>"><?= $contacts->phone_number ?></a></h6>
                        <p><?= $contacts->schedule ?></p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:<?= $contacts->email ?>"><?= $contacts->email ?></a></h6>
                        <p><?= $contacts->some_text ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <?php $form = ActiveForm::begin(['id' => 'contactForm', 'options' => ['class' => 'row contact_form']]); ?>
                <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput() ?>

                <?= $form->field($model, 'email')->textInput() ?>

                <?= $form->field($model, 'subject')->textInput() ?>
                </div>
                <div class="col-md-6">
                <?= $form->field($model, 'message')->textarea() ?>
                </div>

                <div class="col-md-12 text-right">
                    <?= Html::submitButton('Send Message', ['class' => 'btn submit_btn form-control']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->
