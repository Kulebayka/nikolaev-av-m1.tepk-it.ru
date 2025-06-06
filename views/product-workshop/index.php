<?php

use app\models\ProductWorkshop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductWorkshopSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Продукция цеха';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-workshop-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить продукцию цеха', ['create'], ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_product_workshop',
            [
                'attribute' => 'product_id',
                'value' => function($model) {
                    return $model->product ? $model->product->name : '(не задано)';
                },
                'label' => 'Продукция',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Product::find()->all(), 'id_product', 'name'),
            ],
            [
                'attribute' => 'workshop_id',
                'value' => function($model) {
                    return $model->workshop ? $model->workshop->name : '(не задано)';
                },
                'label' => 'Цех',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Workshop::find()->all(), 'id_workshop', 'name'),
            ],
            'time_craft',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProductWorkshop $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_product_workshop' => $model->id_product_workshop]);
                 }
            ],
        ],
    ]); ?>


</div>
