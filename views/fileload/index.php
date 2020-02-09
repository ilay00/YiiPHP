<?php

use \yii\widgets\ActiveForm;
use \yii\helpers\Url;
use \yii\helpers\Html;


//$form=\yii\widgets\ActiveForm::begin();
 $form = ActiveForm::begin();?>
<?=$form->field($model, 'title')->textInput();?>
<div class="row">
    <div class="col-lg-4">
        <?=$form->field($model, 'status')
            ->dropDownList($statusesList)?>
    </div>
    <div class="col-lg-4">
        <?=$form->field($model, 'responsible_id')
            ->dropDownList($usersList)?>
    </div>
    <div class="col-lg-4">
        <?=$form->field($model, 'deadline')
            ->textInput(['type' => 'date'])

        ?>

    </div>
echo $form->field($model,'file')->fileInput();
echo \yii\helpers\Html::submitButton('send');

\yii\widgets\ActiveForm::end();?>







