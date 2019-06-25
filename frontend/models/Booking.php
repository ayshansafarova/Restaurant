<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use borales\extensions\phoneInput\PhoneInputValidator;

class Booking extends ActiveRecord
{
    public static function tableName()
    {
        return 'booking';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'date'], 'required'],
            [['name', 'email'], 'required'],
            [['phone'], PhoneInputValidator::className()],
            [['email'], 'email'],
            [['date'], 'required'],
        ];
    }
}
