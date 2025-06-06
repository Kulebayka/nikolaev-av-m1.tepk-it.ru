<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="workshop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workshop_type_id')->dropDownList(yii\helpers\ArrayHelper::map(app\models\WorkshopType::find()->all(), 'id_workshop_type', 'name'),
        ['prompt' => 'Выбирите тип цеха']) ?>

    <?= $form->field($model, 'count_people')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
