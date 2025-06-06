<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WorkshopType $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="workshop-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
