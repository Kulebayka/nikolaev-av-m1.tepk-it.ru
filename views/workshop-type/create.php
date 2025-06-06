<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkshopType $model */

$this->title = 'Добавить тип цеха';
$this->params['breadcrumbs'][] = ['label' => 'Тип цеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workshop-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
