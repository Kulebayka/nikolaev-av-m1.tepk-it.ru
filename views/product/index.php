<?php

use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Продукция';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <!--Снизу меняем название кнопки и меняем ей цвет через background-->
    <p>
        <?= Html::a('Добавить продукцию', ['create'], ['class' => 'btn btn-success', 'style' => 'background: #355CBD']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_product',
            // снизу показана реализация замены id на данные из таблицы Тип продукции
            [
                'attribute' => 'product_type_id',
                'value' => function($model) {
                    return $model->productType ? $model->productType->name : '(не задано)';
                },
                'label' => 'Тип Продукции',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\ProductType::find()->all(), 'id_product_type', 'name'),
            ],
            'name',
            'article',
            'min_price_partner',
            // снизу показана реализация замены id на данные из таблицы Тип материала
            [
                'attribute' => 'material_type_id',
                'value' => function($model) {
                    return $model->materialType ? $model->materialType->name : '(не задано)';
                },
                'label' => 'Тип Материала',
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\MaterialType::find()->all(), 'id_material_type', 'name'),
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_product' => $model->id_product]);
                 }
            ],
        ],
    ]); ?>


</div>
