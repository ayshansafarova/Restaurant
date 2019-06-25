<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Menu';

?>
<a href="/menu/add-food" class="btn btn-success">Add Food</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Food name</th>
        <th>Ingredients</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($foods as $food): ?>
        <tr>
            <td><?= $food->food_name ?></td>
            <td><?= $food->ingredients ?></td>
            <td><?= $food->price ?>$</td>
            <td><img src="<?= $food->image ?>" alt="<?= $food->food_name ?>" class="miniature"></td>
            <td>
                <a href="/edit-food/<?= $food->id ?>" class="btn btn-primary">Edit</a>
                <a href="/delete-food/<?= $food->id ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
