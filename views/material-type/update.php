<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MaterialType $model */

$this->title = 'Обновление типа материала: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Тип материала', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_material_type' => $model->id_material_type]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="material-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
