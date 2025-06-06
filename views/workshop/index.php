<?php

use app\models\Workshop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WorkshopSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Цеха';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workshop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить Цех', ['create'], ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_workshop',
            'name',
            // снизу показана реализация замены id на данные из таблицы Тип цеха
            [
                'attribute' => 'workshop_type_id',
                'value' => function($model) {
                    return $model->workshopType ? $model->workshopType->name : '(не задано)';
                },
                'label' => 'Тип Продукции',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\WorkshopType::find()->all(), 'id_workshop_type', 'name'),
            ],
            'count_people',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Workshop $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_workshop' => $model->id_workshop]);
                 }
            ],
        ],
    ]); ?>


</div>
