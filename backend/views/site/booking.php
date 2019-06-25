<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Bookings';

$counter = 0;

?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Reservations</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($books as $book): ?>
        <tr>
            <td><?= ++$counter ?></td>
            <td>
                <?php if ($book->is_viewed == 0): ?>
                    <div class="new-book">
                        <a href="/bookings/<?= $book->id ?>" class="text-danger"><b><?= $book->name . ' reserved a table! Take a look.' ?></b>
                        </a>
                    </div>
                <?php else: ?>
                    <a href="/bookings/<?= $book->id ?>"><?= $book->name . ' reserved a table! Take a look.' ?></a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
