<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tables\Tasks */

if (empty($hide)){
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tasks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <? }


    $key = 'task_v' ;
    if ($this->beginCache($key, [
        'duration' => 20,
        'variations' => [$model->id, Yii::$app->language]
    ])
    ) {
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'description',
                'creator_id',
                'responsible_id',
                'deadline',
                'status_id',
            ],
        ]);

        $this->endCache();
    }

    ?>

</div>
