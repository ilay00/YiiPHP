<?php

         namespace app\controllers;
     
      use yii\web\Controller;

    class IsActionController extends Controller
{

	public function actionIndex()
	{
		echo "Hello world "; 
    
	}

                           /**
                * Displays hello world page.
                *
                * @return string*/

                  public function actionTask()
                   {
                    $this-> layout = false;
                   return $this->render('Task');

                   } 
                   
                                  /**
                * Displays hello world page.
                *
                * @return string*/
                  public function actionOneTask()
                  {
                  return $this->render('One');
                  }

                        /**
                * Displays hello world page.
                *
                * @return string*/
                public function actionHello()
                {
                return $this->render('hello');
                }  
                                  


                  }	
?>