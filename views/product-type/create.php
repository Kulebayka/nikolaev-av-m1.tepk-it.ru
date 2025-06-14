<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductType $model */

$this->title = 'Добавление типа продукции';
$this->params['breadcrumbs'][] = ['label' => 'Тип продукции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
