<?php
namespace backend\controllers;

use backend\models\About;
use backend\models\Booking;
use backend\models\Email;
use backend\models\Footer;
use backend\models\MainPage;
use backend\models\Menu;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;
use backend\models\Contacts;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                            'logout',
                            'index',
                            'contacts',
                            'add-food',
                            'delete-food',
                            'edit-food',
                            'menu',
                            'about',
                            'booking',
                            'book-by-id',
                            'messages',
                            'message-by-id',
                            'main-page',
                            'footer'
                        ],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContacts()
    {
        $model = Contacts::findOne(['id' => 1]);

        if ($model->load(Yii::$app->request->post())
                && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success', 'Contacts saved successfully!');
        }

        return $this->render('contacts', ['model' => $model]);
    }

    public function actionMenu()
    {
        $foods = Menu::find()->all();

        return $this->render('menu', ['foods' => $foods]);
    }

    public function actionAddFood()
    {
        $food = new Menu();

        if ($food->load(Yii::$app->request->post()))
        {
            $food->file = UploadedFile::getInstance($food, 'file');
            if ($food->validate())
            {
                $real_file_path = Yii::getAlias('@images') . $food->file->baseName . time() . '.' . $food->file->extension;
                $back_file_path = Yii::getAlias('@imagesback') . $food->file->baseName . time() . '.' . $food->file->extension;
                $relative_path = '/img/' . $food->file->baseName . time() . '.' . $food->file->extension;
                if ($food->file->saveAs($real_file_path) && copy($real_file_path, $back_file_path))
                {
                    $food->image = $relative_path;
                    $food->save();
                    Yii::$app->session->setFlash('success', 'Food saved successfully!');
                }
                else
                {
                    Yii::$app->session->setFlash('error', 'Food wasn\'t saved. Error occured.');
                }
            }
        }

        return $this->render('add-food', ['food' => $food]);
    }

    public function actionDeleteFood($id)
    {
        $food = Menu::findOne(['id' => $id]);

        if (!empty($food) && $food->delete())
        {
            Yii::$app->session->setFlash('success', 'Food successfully deleted.');
            return $this->redirect('/menu');
        }
        else
        {
            Yii::$app->session->setFlash('error', 'Food wasn\'t deleted. Error occured.');
            return $this->redirect('/menu');
        }
    }

    public function actionEditFood($id)
    {
        $food = Menu::findOne(['id' => $id]);
        $old_img_path = $food->image;

        if ($food->load(Yii::$app->request->post()))
        {
            if (UploadedFile::getInstance($food, 'file') == null)
            {
                $food->image = $old_img_path;
                if ($food->validate())
                {
                    $food->save();
                    Yii::$app->session->setFlash('success', 'Food edited successfully!');
                }
            }
            else
            {
                $food->file = UploadedFile::getInstance($food, 'file');
                if ($food->validate())
                {
                    $real_file_path = Yii::getAlias('@images') . $food->file->baseName . time() . '.' . $food->file->extension;
                    $back_file_path = Yii::getAlias('@imagesback') . $food->file->baseName . time() . '.' . $food->file->extension;
                    $relative_path = '/img/' . $food->file->baseName . time() . '.' . $food->file->extension;
                    if ($food->file->saveAs($real_file_path) && copy($real_file_path, $back_file_path))
                    {
                        $food->image = $relative_path;
                        $food->save();
                        Yii::$app->session->setFlash('success', 'Food edited successfully!');
                    }
                    else
                    {
                        Yii::$app->session->setFlash('error', 'Food wasn\'t edited. Error occured.');
                    }
                }
            }
        }

        return $this->render('edit-food', ['food' => $food]);
    }

    public function actionAbout()
    {
        $model = About::findOne(['id' => 1]);

        if ($model->load(Yii::$app->request->post())
            && $model->validate())
        {
            $model->save();
            Yii::$app->session->setFlash('success', 'About page saved successfully!');
        }

        return $this->render('about', ['model' => $model]);
    }

    public function actionBooking()
    {
        $books = Booking::find()->orderBy('id DESC')->all();

        return $this->render('booking', ['books' => $books]);
    }

    public function actionBookById($id)
    {
        $book = Booking::findOne(['id' => $id]);
        if (!empty($book))
        {
            $book->is_viewed = 1;
            $book->save();
        }

        return $this->render('book', ['book' => $book]);
    }

    public function actionMessages()
    {
        $messages = Email::find()->all();

        return $this->render('messages', ['messages' => $messages]);
    }

    public function actionMessageById($id)
    {
        $message = Email::findOne(['id' => $id]);
        if (!empty($message))
        {
            $message->is_viewed = 1;
            $message->save();
        }

        return $this->render('message', ['message' => $message]);
    }

    public function actionMainPage()
    {
        $model = MainPage::findOne(['id' => 1]);

        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->validate())
            {
                $model->save();
                Yii::$app->session->setFlash('success', 'Main Page info was successfully updated.');
            }
            else
            {
                Yii::$app->session->setFlash('error', 'Please, enter a valid data.');
            }
        }

        return $this->render('main_page', ['model' => $model]);
    }

    public function actionFooter()
    {
        $model = Footer::findOne(['id' => 1]);

        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->validate())
            {
                $model->save();
                Yii::$app->session->setFlash('success', 'Footer info was successfully updated.');
            }
            else
            {
                Yii::$app->session->setFlash('error', 'Please, enter a valid data.');
            }
        }

        return $this->render('footer', ['model' => $model]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}
