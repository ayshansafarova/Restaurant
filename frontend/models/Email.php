<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Email extends ActiveRecord
{
    public static function tableName()
    {
        return 'email';
    }

    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'message'], 'required'],
            [['email'], 'email']
        ];
    }
}
