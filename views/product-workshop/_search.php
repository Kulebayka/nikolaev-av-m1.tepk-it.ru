<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductWorkshopSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-workshop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_product_workshop') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'workshop_id') ?>

    <?= $form->field($model, 'time_craft') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'style' => 'background: #355CBD']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'style' => 'background: #355CBD']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
