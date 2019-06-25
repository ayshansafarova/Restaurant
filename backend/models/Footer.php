<?php

namespace backend\models;

use yii\db\ActiveRecord;

class Footer extends ActiveRecord
{
    public static function tableName()
    {
        return 'footer';
    }

    public function rules()
    {
        return [
            [['footer_content'], 'required'],
            [['footer_content'], 'string']
        ];
    }
}
