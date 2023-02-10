<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Rwardamage $model */

$this->title = 'Create Rwardamage';
$this->params['breadcrumbs'][] = ['label' => 'Rwardamages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rwardamage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
