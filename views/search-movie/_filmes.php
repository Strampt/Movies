<?php
use yii\helpers\Html;
use app\models\SearchMovie;
use yii\helpers\Url;
?>

<div class="col-sm-3 col-xs-6">
    <div class="filmes">
        <a class="overlay" href="<?=Url::to(['/search-movie/view', 'id'=>$model->id])?>"><h5><?=$model->title?></h5></a>
        <img id="poster" src="<?=$model->poster?>">
    </div>
</div>
