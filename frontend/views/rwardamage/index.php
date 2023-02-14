<?php

use frontend\models\Rwardamage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\rwardamageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rwardamages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rwardamage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-5.png" alt="" class="card" style="width: 600px;">
	<p>
        <font size="4">俄罗斯空天军一共损失了23架战斗机，目前我们已知的苏-34战斗轰炸机19架，苏-35S战斗机可能是2架，苏-30SM战斗机可能也是2架，那么这个数据还是比较客观的。不过要是算在战场上损失的苏-24战斗机和苏-25攻击机，那么实际损失的数量肯定要比23架多得多。
        除了23架战斗机外，俄罗斯空天军还损失了56架直升机；200辆汽车；889辆坦克和装甲车；427门火炮系统；12部防空系统</font>
    </p>
    <p>
        <?= Html::a('Create Rwardamage', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, Rwardamage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon]);
                 }
            ],
        ],
    ]); ?>


</div>
