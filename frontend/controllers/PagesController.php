<?php

namespace frontend\controllers;

use frontend\models\About;
use frontend\models\Booking;
use frontend\models\Contacts;
use frontend\models\Email;
use frontend\models\Menu;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;

class PagesController extends Controller
{
    public $layout = 'custom';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionAbout()
    {
        $about = About::findOne(['id' => 1]);

        return $this->render('about', ['about' => $about]);
    }

    public function actionContact()
    {
        $contacts = Contacts::findOne(['id' => 1]);
        $model = new Email();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success', "You've successfully sent a message!");
        }
        else
        {
            Yii::$app->session->setFlash('error', "Please, enter valid data's.");
        }

        return $this->render('contact', ['contacts' => $contacts, 'model' => $model]);
    }

    public function actionMenu()
    {
        $menu = Menu::find()->asArray()->all();
        $count = Menu::find()->select('COUNT(id) as count')->asArray()->one()['count'];

        return $this->render('menu', ['menu' => $menu, 'count' => $count]);
    }

    public function actionBook()
    {
        $model = new Booking();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->created_at = date('Y-m-d H:i:s');
            $model->save();
            Yii::$app->session->setFlash('success', "You've successfully booked a table!");
        }
        else
        {
            Yii::$app->session->setFlash('error', "Please, enter valid data's.");
        }

        return $this->render('book', ['model' => $model]);
    }
}
