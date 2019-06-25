<?php
/* @var $this yii\web\View */


$this->title = 'Messages';

$counter = 0;

?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Messages</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= ++$counter ?></td>
            <td>
                <?php if ($message->is_viewed == 0): ?>
                    <div class="new-book">
                        <a href="/messages/<?= $message->id ?>"><b><?= $message->name . ' sent you a message! Take a look.' ?></b></a>
                        <img src="/img/new.png" alt="new" class="new-img">
                    </div>
                <?php else: ?>
                    <a href="/messages/<?= $message->id ?>"><?= $message->name . ' sent you a message! Take a look.' ?></a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
