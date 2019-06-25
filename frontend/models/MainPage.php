<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 20.12.2018
 * Time: 16:36
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class MainPage extends ActiveRecord
{
    public static function tableName()
    {
        return 'main_page';
    }
}
