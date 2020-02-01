<?php
 use yii\helpers\Url;

?>

<div class="task-container">
	<a class="task-preview-link" href="/index.php?r=task/one&id=<?=$model->id?>">
	<div class="task-preview">
	<div class="task-preview-header"><?=$model->title?></div>
	<div class="task-preview-content"><?=$model->description?></div>
    <div class="task-preview-user"><?=$model->responsible->login?></div>
    </div>
    </a>


	</div>