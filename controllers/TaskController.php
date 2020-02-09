<?php

namespace app\controllers;

use app\models\forms\TaskAttachmentsAddForm;
use app\models\Lesson;
use app\models\tables\Tasks;
use app\models\tables\TaskStatuses;
use app\models\tables\Users;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;

class TaskController extends Controller
{
    public function actionIndex($month = null)
    {
        $query = Tasks::find();

        $cache = \Yii::$app->cache;

        if(!is_null($month)){
            $query->where('MONTH(deadline) = :month', [':month' =>$month]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        \Yii::$app->db->cache(function () use ($dataProvider){
            return $dataProvider->prepare();
        });

        return $this->render('index', ['dataProvider' => $dataProvider]);

    }

    public function actionOne($id)
    {
        return $this->render('one', [
            'model' => Tasks::findOne($id),
            'usersList' => Users::getUsersList(),
            'statusesList' => TaskStatuses::getList(),
            'taskAttachmentForm' => new TaskAttachmentsAddForm(),
            'userId' => \Yii::$app->user->id,
        ]);
    }

    public function actionSave($id)
    {
        if ($model = Tasks::findOne($id)) {
            $model->load(\Yii::$app->request->post());
            $model->save();
            \Yii::$app->session->setFlash('success', "Изменеия сохранены");
        } else {
            \Yii::$app->session->setFlash('error', "Не удалось сохранить изменения");
        }

        $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionAddAttachment()
    {
        $model = new TaskAttachmentsAddForm();
        $model->load(\Yii::$app->request->post());
        $model->attachment = UploadedFile::getInstance($model, 'attachment');
        if ($model->save()) {
            \Yii::$app->session->setFlash('success', "Файл добавлен");
        } else {
            \Yii::$app->session->setFlash('error', "Не удалось добавить файл");
        }
        $this->redirect(\Yii::$app->request->referrer);
    }
}