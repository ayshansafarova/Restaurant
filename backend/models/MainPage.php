<?php

namespace backend\models;

use yii\db\ActiveRecord;

class MainPage extends ActiveRecord
{
    public static function tableName()
    {
        return 'main_page';
    }

    public function rules()
    {
        return [
            [['main_title', 'main_description', 'main_button_label', 'main_button_url'], 'required'],
            [['main_title', 'main_description', 'main_button_label', 'main_button_url'], 'string']
        ];
    }
}
