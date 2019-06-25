<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Contacts extends ActiveRecord
{
    public static function tableName()
    {
        return 'contacts';
    }

    public function rules()
    {
        return [
            [['country_state',
                'address',
                'phone_number',
                'schedule',
                'email',
                'some_text'
            ], 'required'],
            [['email'], 'email']
        ];
    }
}
