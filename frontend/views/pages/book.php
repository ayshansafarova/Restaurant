<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use borales\extensions\phoneInput\PhoneInput;

$this->title = 'Book a Table';
$this->params['breadcrumbs'][] = $this->title;

?>
<!--================Book Table Area =================-->
<section class="book_table_area section_gap">
    <div class="container">
        <?php if (!empty(Yii::$app->session->getFlash('error'))): ?>
            <div class="error-summary"><?= Yii::$app->session->getFlash('error') ?></div>
        <?php elseif (!empty(Yii::$app->session->getFlash('success'))): ?>
            <div class="success"><?= Yii::$app->session->getFlash('success') ?></div>
        <?php endif; ?>
        <div class="book_table_inner row">
            <div class="col-lg-5">
                <div class="table_img">
                    <img src="img/book-table.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="table_form">
                    <h3>Book a Table</h3>
                    <p>Who are in extremely love with eco friendly system lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <?php $form = ActiveForm::begin(['id' => 'form-book']); ?>

                        <?= $form->field($model, 'name')->textInput() ?>

                        <?= $form->field($model, 'email')->textInput() ?>

                        <?= $form->field($model, 'phone')->widget(PhoneInput::className(), [
                            'jsOptions' => [
                                'onlyCountries' => ['no', 'pl', 'ua'],
                                'nationalMode' => true
                            ]
                        ]); ?>

                        <?= $form->field($model, 'date')->input('date') ?>

                        <div class="form-group">
                            <?= Html::submitButton('Make Reservation', ['class' => 'btn submit_btn form-control']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
<!--                    <form class="book_table_form row" action="#">-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Select date & time">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <div class="form-select">-->
<!--                                <select>-->
<!--                                    <option value="1">Select event</option>-->
<!--                                    <option value="1">Select event Dhaka</option>-->
<!--                                    <option value="1">Select event Dilli</option>-->
<!--                                    <option value="1">Select event Newyork</option>-->
<!--                                    <option value="1">Select event Islamabad</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-12">-->
<!--                            <button type="submit" value="submit" class="btn submit_btn form-control">Make Reservation</button>-->
<!--                        </div>-->
<!--                    </form>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Book Table Area =================-->
