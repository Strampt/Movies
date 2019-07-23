<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchMovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search-movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'imdbid') ?>

    <?php echo $form->field($model, 'title')->input('text', ['placeholder' => Yii::t('app', 'Enter a Movie')]); ?>

    <?php // $form->field($model, 'year') ?>

    <?php // $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <div class="form-group">
        <?=  Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
