<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Usupport $model */

$this->title = $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Usupports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usupport-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Update', ['update', 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time], [
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
            'country',
            'resource',
            'amount',
            'time',
        ],
    ]) ?>

</div>
