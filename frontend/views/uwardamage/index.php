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
    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-6.jpg" alt="" class="card" style="width: 600px;">
	<p>
        <font size="4">乌克兰空军已经损失了302架军用飞机（这个数字应该包括在地面上被摧毁的退役军用飞机），212架直升机，2750辆汽车，6320辆坦克和装甲车（乌克兰为什么现在急着让北约国家提供坦克的原因所在），7360门火炮系统，497部防空系统。</font>
    </p>
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
