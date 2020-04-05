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
            'data-pjax' => true,
            //'class' => 'form-inline',
            'tag' => 'div',
            'class' => 'input-group col-md-offset-6',
        ],
        /*'fieldConfig' => [
            'template'=>'{input}',
        ],*/
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'imdbid') ?>

    <?= $form->field($model, Html::encode('title'), ['options'=>[
        'tag'=>'div',
        'class'=>'form-group field-loginform-username has-feedback'
        ],
        'template'=>'{input}<span class="glyphicon glyphicon-search form-control-feedback"></span>'
        ])->textInput(['id' => 'titulo-filme', 'type'=>'search', 'placeholder'=>'What movie are you looking for?', 'autocomplete'=>'off']); ?>

    <?php // $form->field($model, 'year') ?>

    <?php // $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'poster') ?>

    <!--
    glyphicon glyphicon-search
    Criar script, caso seja clickada a search bar, ela aumentar. add() css class
     -->


    <span class="input-group-btn">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </span>

    <?php ActiveForm::end(); ?>

</div>
