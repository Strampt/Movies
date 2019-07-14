<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TitleMovie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="title-movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imdbid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poster')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'released')->textInput() ?>

    <?= $form->field($model, 'runtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'imdbrating')->textInput() ?>

    <?= $form->field($model, 'director')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
