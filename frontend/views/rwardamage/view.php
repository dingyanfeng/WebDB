<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Rwardamage $model */

$this->title = $model->place;
$this->params['breadcrumbs'][] = ['label' => 'Rwardamages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rwardamage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'place',
            'time',
            'weapon',
            'amount',
        ],
    ]) ?>

</div>
