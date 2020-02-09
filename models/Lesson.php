<?php

namespace app\models;

use yii\base\Model;
use yii\validators\StringValidator;

class Lesson extends Model
{
    public $name;
    public $description;
    public $order;

    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 10],
            [['order'], 'number', 'max' => 5],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название'
        ];
    }


    public function myValidate($attributeName, $params)
    {
        if ($this->$attributeName > 10) {
            $this->addError($attributeName, 'Больше 10!!!!!');
        }
    }
}