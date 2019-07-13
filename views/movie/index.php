<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Movies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Movie'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'imbdid',
            'title',
            'year',
            'genre',
            //'director',
            //'plot:ntext',
            //'poster',
            //'imdbrating',
            //'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
