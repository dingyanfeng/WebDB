<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\views\Collision $model */

$this->title = 'Update Collision: ' . $model->place;
$this->params['breadcrumbs'][] = ['label' => 'Collisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->place, 'url' => ['view', 'place' => $model->place, 'time' => $model->time]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collision-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
