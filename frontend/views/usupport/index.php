<?php

use frontend\models\Usupport;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\usupportSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usupports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usupport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <font size="8">本页面展示了世界各国各国对乌克兰的援助,包括不同数量的武器，金钱（美元）等。</font>
    </p>
    <p>
        <?= Html::a('Create Usupport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'resource',
            'amount',
            'time',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usupport $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time]);
                 }
            ],
        ],
    ]); ?>


</div>
