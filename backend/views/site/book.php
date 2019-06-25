<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = $book->name . ' requests a table reservation';

?>

<section id="message">
    <div id="from">From: <?= $book->name ?></div>
    <div id="email">Email: <?= $book->email ?></div>
    <div id="phone">Phone: <?= $book->phone ?></div>
    <div id="date">Date: <?= date('d.m.Y', strtotime($book->date)) ?></div>
</section>
