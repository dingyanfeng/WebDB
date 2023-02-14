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
    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-4.jpg" alt="" class="card" style="width: 600px;">
	<p>
        <font size="4">俄罗斯军队为了这场战争，已经累计在战场上部署了418000名士兵（这里包括350000名预备役人员，经过几次动员和相关的训练，这批预备役人员在适当的时候，会进入战场）。
        除了这些正规军外，俄罗斯在乌克兰的军事力量还包括越来越多的瓦格纳雇佣军。
        俄人员损失：18480人死亡，44500人受伤，323人被俘。
        乌克兰军队在战场上部署了73.4万士兵（包含10万名预备役人员），以及北约换皮军和雇佣军。
        以色列情报部门称乌克兰有157000人死亡，234000人受伤，17230人被俘。另外疑似北约军事教官 （美国和英国）234人死亡，北约士兵(德国、波兰、立陶宛等国）2458人死亡，来自全球多个国家和地区的雇佣兵5360人死亡。
        </font>
    </p>
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
