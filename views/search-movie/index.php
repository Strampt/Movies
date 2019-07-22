<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Search Movies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php 
        if(!Yii::$app->user->isGuest) {
            echo Html::a(Yii::t('app', 'Create Search Movie'), ['create'], ['class' => 'btn btn-success']);
        } ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php /*GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            'imdbid',
            'title',
            'year',
            //'type',
            'poster',
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>

    <?php echo $this->render('_filmes', ['movies' => $movies]); ?>
    <?php Pjax::end(); ?>

</div>
