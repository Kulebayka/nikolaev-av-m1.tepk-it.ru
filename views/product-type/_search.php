<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductTypeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_product_type') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'koeficent_type_product') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'style' => 'background: #355CBD']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'style' => 'background: #355CBD']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
