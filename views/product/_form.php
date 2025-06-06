<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_type_id')->dropDownList(yii\helpers\ArrayHelper::map(app\models\ProductType::find()->all(), 'id_product_type', 'name'),
    ['prompt' => 'Выбирите тип продукции']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article')->textInput() ?>

    <?= $form->field($model, 'min_price_partner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_type_id')->dropDownList(yii\helpers\ArrayHelper::map(app\models\MaterialType::find()->all(), 'id_material_type', 'name'),
        ['prompt' => 'Выбирите тип продукции']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
