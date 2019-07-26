<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Search Movies');
//$this->params['breadcrumbs'][] = $this->title;
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

    <!-- EUREKA -->
    <?php if($dataProvider->totalCount == 0 && strlen($searchModel->title) > 3) {
        //preciso de chamar o metodo que está nos comands para ir buscar o filme :D
        echo Html::tag('h2', $searchModel->title);
    } ?>

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

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "<div class\"items\">{items}</div>",
        'itemView' => '_filmes',
        /*'emptyTextOptions' => [
            'class' => 'empty',
        ],*/
    ]);
    ?>
    <?php Pjax::end(); ?>

</div>
