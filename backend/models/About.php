<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 18.12.2018
 * Time: 22:22
 */

namespace backend\models;

use yii\db\ActiveRecord;

class About extends ActiveRecord
{
    public static function tableName()
    {
        return 'about';
    }

    public function rules()
    {
        return [
            [['title', 'description', 'button_link', 'button_label'], 'string'],
            [['title', 'description', 'button_link', 'button_label'], 'required']
        ];
    }
}
