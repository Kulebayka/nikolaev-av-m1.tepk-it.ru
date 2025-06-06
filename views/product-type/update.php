<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductType $model */

$this->title = 'Обновление типа продукции: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Тип продукции', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_product_type' => $model->id_product_type]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="product-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
