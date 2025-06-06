<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */

$this->title = 'Обновление цеха: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Цеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id_workshop' => $model->id_workshop]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="workshop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
