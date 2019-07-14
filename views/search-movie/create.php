<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SearchMovie */

$this->title = Yii::t('app', 'Create Search Movie');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Search Movies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-movie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
