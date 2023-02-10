<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Uwardamage $model */

$this->title = 'Update Uwardamage: ' . $model->place;
$this->params['breadcrumbs'][] = ['label' => 'Uwardamages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->place, 'url' => ['view', 'place' => $model->place, 'time' => $model->time, 'weapon' => $model->weapon]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uwardamage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
