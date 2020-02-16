<?php
namespace app\assets;
use yii\web\AssetBundle;




class TaskAsset extends AssetBundle
{
public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/task.css'
    ];
    public $js = [
    	'js/task.js'
    ];
    public $depends = [
           //'yii\web\JqueryAsset::class',
    	 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'

    ];

}
?>