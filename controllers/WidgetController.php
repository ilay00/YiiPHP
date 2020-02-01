<?php


namespace app\controllers;


use app\models\Tasks;
use yii\web\Controller;

class WidgetController extends Controller
{
    public function actionIndex()
    {
        \Yii::$app->request->post(); exit;
        $model = new Tasks();
        return $this->render('index', ['model' => $model]);
    }
}