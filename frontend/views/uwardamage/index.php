<?php

use frontend\models\Uwardamage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\uwardamageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Uwardamages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uwardamage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uwardamage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'place',
            'time',
            'weapon',
            'amount',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Uwardamage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon]);
                 }
            ],
        ],
    ]); ?>


</div>
