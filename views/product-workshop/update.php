<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductWorkshop $model */

$this->title = 'Обновить продукцию цеха: ' . $model->id_product_workshop;
$this->params['breadcrumbs'][] = ['label' => 'Продукция цеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_product_workshop, 'url' => ['view', 'id_product_workshop' => $model->id_product_workshop]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="product-workshop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
