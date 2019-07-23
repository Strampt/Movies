<?php
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use app\models\SearchMovie;
use yii\helpers\Url;
?>

<div class="col-sm-4 col-xs-12">
    <div class="filmes">
        <a href="<?=Url::to(['/search-movie/view', 'id'=>$model->id])?>"><h2><?=$model->title?></h2></a>
        <img src="<?=$model->poster?>">
    </div>
</div>
