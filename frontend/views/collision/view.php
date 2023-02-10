<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\views\Collision $model */

$this->title = $model->place;
$this->params['breadcrumbs'][] = ['label' => 'Collisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="collision-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'place' => $model->place, 'time' => $model->time], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'place' => $model->place, 'time' => $model->time], [
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
            'rforce',
            'uforce',
            'rinjury',
            'uinjury',
        ],
    ]) ?>

</div>
