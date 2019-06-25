<?php
/* @var $this yii\web\View */

$this->title = $message->name . ' sent you an email.';

?>

<section id="message">
    <div id="from">From: <?= $message->name ?></div>
    <div id="email">Email: <?= $message->email ?></div>
    <div id="phone">Subject: <?= $message->subject ?></div>
    <div id="date">Message:</div>
    <hr>
    <div id="message">
        <?= $message->message ?>
    </div>
</section>
