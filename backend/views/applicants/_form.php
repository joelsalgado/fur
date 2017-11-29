<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Applicants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applicants-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CURP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_lada')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'celphone_lada')->textInput() ?>

    <?= $form->field($model, 'celphone')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
