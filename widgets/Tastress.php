<?php

namespace app\widgets;
use app\models\tables\Tastrec;
use yii\base\Widget;

/**
 * 
 */


class Tastress extends Widget
{
	
  public $model;

	
     public	function run()
	{
      return $this->render('tasttrc',['model' => $this->model]
  );
 


	}
}










?>