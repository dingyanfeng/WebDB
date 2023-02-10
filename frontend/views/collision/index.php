<?php

use frontend\models\collision;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CollisionSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Collisions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collision-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Collision', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'place',
            'time',
            'rforce',
            'uforce',
            'rinjury',
            //'uinjury',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Collision $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'place' => $model->place, 'time' => $model->time]);
                 }
            ],
        ],
    ]); ?>


</div>
