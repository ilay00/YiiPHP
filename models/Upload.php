<?php


namespace app\models;


use yii\base\Model;
use yii\imagine\Image;
use yii\web\UploadedFile;

class Upload extends Model
{

    public $title;
    public $content;
    /** @var  UploadedFile */
    public $file;

    public function rules()
    {
        return [
            [['title', 'content'], 'safe'],
            ['file', 'file', 'extensions' => 'jpg, png']
        ];
    }

    public function save()
    {
        $filepath = \Yii::getAlias("@uploads/{$this->file->name}");
        $this->file->saveAs($filepath);

        Image::thumbnail($filepath, 100, 100)
            ->save(\Yii::getAlias("@uploads/small/{$this->file->name}"));
    }


}