<?php
namespace app\controllers;

use app\models\Fileload;

use yii\web\Controller;
use yii\web\UploadedFile;



class FileloadController extends Controller
{
    public function actionIndex()
    {
        $model = new Fileload();
       if($model->load(\Yii::$app->request->post())){
            $model->file = UploadedFile::getInstance($model,'file');
            $model->save();
        }
       
      return $this->render('index',['model'=>$model]);
    }

   

}



?>