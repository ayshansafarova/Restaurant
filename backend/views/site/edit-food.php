<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Edit Food $food->food_name";

?>
<div class="contacts-edit">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-food', 'options' => ['enctype' => 'multipart/form-data']]); ?>

            <?= $form->field($food, 'food_name')->textInput() ?>

            <?= $form->field($food, 'ingredients')->textInput()->label('Ingredients (separated by slash \'/\')') ?>

            <?= $form->field($food, 'file')->fileInput() ?>

            <?= $form->field($food, 'price')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
