<?php


namespace app\controllers;


use app\models\Upload;
use yii\web\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{

    public function actionIndex()
    {
        $model = new Upload();
        if($model->load(\Yii::$app->request->post())){
            $model->file = UploadedFile::getInstance($model, 'file');
            $model->save();
        }
        return $this->render('index', ['model' => $model]);
    }

    public function actionIn()
    {
        \Yii::$app->language = 'ru';
        echo \Yii::t("app", "error",['number' => 500]);
        exit;
    }
}