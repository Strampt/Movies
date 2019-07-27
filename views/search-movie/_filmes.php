<?php
use yii\helpers\Html;
use app\models\SearchMovie;
use yii\helpers\Url;
?>

<div class="col-sm-3 col-xs-12">
    <div class="filmes">
        <a href="<?=Url::to(['/search-movie/view', 'id'=>$model->id])?>"><h5><?=$model->title?></h5></a>
        <img id="poster" src="<?=$model->poster?>" style="width: 60%; display:block; margin:auto;">
    </div>
</div>
