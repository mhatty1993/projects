<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="projectassignment-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'employee_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'project_id')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
