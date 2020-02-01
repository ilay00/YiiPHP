<?php
/** @var \yii\data\ActiveDataProvider $dataProvider */
//echo \app\widgets\TaskPreview::widget(['model' => $model]);
echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => function($model){
            return \app\widgets\TaskPreview::widget(['model' => $model]);
    },
    'options' => [
        'class' => 'preview-container'
    ],
    'summary' => false

]);
?>