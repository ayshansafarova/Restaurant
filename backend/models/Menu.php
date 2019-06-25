<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 13.12.2018
 * Time: 20:13
 */

namespace backend\models;


use yii\db\ActiveRecord;

class Menu extends ActiveRecord
{
    public $file;

    public static function tableName()
    {
        return 'menu';
    }

    public function rules()
    {
        return [
            [['food_name', 'ingredients', 'price'], 'required'],
            [['file'], 'file']
        ];
    }
}
