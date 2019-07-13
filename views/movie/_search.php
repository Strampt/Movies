<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'imbdid') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'year') ?>

    <?= $form->field($model, 'genre') ?>

    <?php // echo $form->field($model, 'director') ?>

    <?php // echo $form->field($model, 'plot') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <?php // echo $form->field($model, 'imdbrating') ?>

    <?php // echo $form->field($model, 'type') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
