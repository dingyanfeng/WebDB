<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Usupport $model */

$this->title = 'Update Usupport: ' . $model->country;
$this->params['breadcrumbs'][] = ['label' => 'Usupports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country, 'url' => ['view', 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usupport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
