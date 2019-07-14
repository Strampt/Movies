<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TitleMovie */

$this->title = Yii::t('app', 'Create Title Movie');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Title Movies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-movie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
