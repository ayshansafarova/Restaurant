<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 18.12.2018
 * Time: 23:58
 */

namespace backend\models;

use yii\db\ActiveRecord;

class Booking extends ActiveRecord
{
    public static function tableName()
    {
        return 'booking';
    }
}
