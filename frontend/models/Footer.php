<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 20.12.2018
 * Time: 16:43
 */

namespace frontend\models;

use yii\db\ActiveRecord;

class Footer extends ActiveRecord
{
    public static function tableName()
    {
        return 'footer';
    }
}
