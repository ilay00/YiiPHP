<?php

namespace app\models;

use yii\base\Model;
use yii\validators\StringValidator;

class Tasks extends Model
{
    public $title;
    public $description;
    public $users;

     public static function tableName()
    {
        return 'tasks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['creator_id', 'responsible_id', 'status_id'], 'integer'],
            [['deadline'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название'
        ];
    }


    public function myValidate($attributeName, $params)
    {
        if ($this->$attributeName > 10) {
            $this->addError($attributeName, 'Больше 10!!!!!');
        }
    }
}