<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchMovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search-movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1,
            'class' => 'form-inline',
        ],
        'fieldConfig' => [
            'template'=>"{input}\n",
        ],
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'imdbid') ?>

    <?= $form->field($model, Html::encode('title'))->textInput(['id' => 'titulo-filme', 'placeholder'=>$model->getAttributeLabel('Search Movie'), 'autocomplete'=>'off']); ?>

    <?php // $form->field($model, 'year') ?>

    <?php // $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <!--
    glyphicon glyphicon-search
    Criar script, caso seja clickada a search bar, ela aumentar. add() css class
     -->


    <div class="form-group">
        <?=  Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
