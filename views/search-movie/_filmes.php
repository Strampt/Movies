<?php
use yii\helpers\Html;
use app\models\SearchMovie;
use yii\helpers\Url;
?>

<div class="col-sm-3 col-xs-6">
    <div class="filmes">
        <a class="overlay" href="<?=Url::to(['/search-movie/view', 'id'=>$model->id])?>"><h4 class="titulo"><?=$model->title?></h4></a>
        <img id="poster" src="<?=$model->poster?>" alt="poster">
    </div>
</div>
