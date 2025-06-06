<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProductWorkshop $model */

$this->title = 'Добавить продукцию цеха';
$this->params['breadcrumbs'][] = ['label' => 'Продукция цеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-workshop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
