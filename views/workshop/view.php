<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Workshop $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Цеха', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workshop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_workshop' => $model->id_workshop], ['class' => 'btn btn-primary', 'style' => 'background: #355CBD']) ?>
        <?= Html::a('Удалить', ['delete', 'id_workshop' => $model->id_workshop], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить Цех?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_workshop',
            'name',
            'workshop_type_id',
            'count_people',
        ],
    ]) ?>

</div>
