<?php
namespace app\models;
use yii\base\Model;
use yii\imagine\Image;
use yii\web\UploadedFile;


class Fileload extends Model
{
public $file;


/*public function behaviors()
{
    return [
        'image'=>[
            'class' => 'rico\yii2images\behaviors\ImageBehave',
        ]
        ];
}*/

public function rules()
{
    return [
        ['file','file','extensions' => 'jpg, png'],
   
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
?>
