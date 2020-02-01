<?php
/** @var \app\models\tables\Tasks $model*/
var_dump($model);
$from=\yii\From\ActiveForm::begin();

echo $from->field($model,'title')->textInput();


\yii\From\ActiveForm::end();


?>