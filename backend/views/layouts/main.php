<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\db\Query;

AppAsset::register($this);

$qb = new Query();
$book_count = $qb
                ->select('COUNT(id) as count')
                ->from('booking')
                ->where(['is_viewed' => 0])
                ->one()['count'];
$message_count = $qb
                ->select('COUNT(id) as count')
                ->from('email')
                ->where(['is_viewed' => 0])
                ->one()['count'];

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [];

    if (!empty($book_count) && !empty($message_count)){
        $menuItems = [
            ['label' => 'Home', 'url' => ['/']],
            ['label' => 'Menu', 'url' => ['/menu']],
            ['label' => 'Contacts', 'url' => ['/contacts']],
            ['label' => 'About', 'url' => ['/about']],
            ['label' => "Bookings +$book_count", 'url' => ['/bookings']],
            ['label' => "Messages +$message_count", 'url' => ['/messages']],
            ['label' => "Main Page", 'url' => ['/main-page']],
            ['label' => "Footer", 'url' => ['/footer']],
        ];
    }else if (empty($book_count) && !empty($message_count)){
        $menuItems = [
            ['label' => 'Home', 'url' => ['/']],
            ['label' => 'Menu', 'url' => ['/menu']],
            ['label' => 'Contacts', 'url' => ['/contacts']],
            ['label' => 'About', 'url' => ['/about']],
            ['label' => "Bookings", 'url' => ['/bookings']],
            ['label' => "Messages +$message_count", 'url' => ['/messages']],
            ['label' => "Main Page", 'url' => ['/main-page']],
            ['label' => "Footer", 'url' => ['/footer']],
        ];
    }else if (!empty($book_count) && empty($message_count)){
        $menuItems = [
            ['label' => 'Home', 'url' => ['/']],
            ['label' => 'Menu', 'url' => ['/menu']],
            ['label' => 'Contacts', 'url' => ['/contacts']],
            ['label' => 'About', 'url' => ['/about']],
            ['label' => "Bookings +$book_count", 'url' => ['/bookings']],
            ['label' => "Messages", 'url' => ['/messages']],
            ['label' => "Main Page", 'url' => ['/main-page']],
            ['label' => "Footer", 'url' => ['/footer']],
        ];
    }else{
        $menuItems = [
            ['label' => 'Home', 'url' => ['/']],
            ['label' => 'Menu', 'url' => ['/menu']],
            ['label' => 'Contacts', 'url' => ['/contacts']],
            ['label' => 'About', 'url' => ['/about']],
            ['label' => "Bookings", 'url' => ['/bookings']],
            ['label' => "Messages", 'url' => ['/messages']],
            ['label' => "Main Page", 'url' => ['/main-page']],
            ['label' => "Footer", 'url' => ['/footer']],
        ];
    }

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
