<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'Food Bar',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/contacts' => 'site/contacts',
                '/menu/add-food' => 'site/add-food',
                '/delete-food/<id:\d+>' => 'site/delete-food',
                '/edit-food/<id:\d+>' => 'site/edit-food',
                '/menu' => 'site/menu',
                '/about' => 'site/about',
                '/bookings' => 'site/booking',
                '/bookings/<id:\d+>' => 'site/book-by-id',
                '/messages' => 'site/messages',
                '/messages/<id:\d+>' => 'site/message-by-id',
                '/main-page' => 'site/main-page',
                '/footer' => 'site/footer'
            ],
        ],
    ],
    'params' => $params,
];
