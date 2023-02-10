<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Uwardamage $model */

$this->title = 'Create Uwardamage';
$this->params['breadcrumbs'][] = ['label' => 'Uwardamages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uwardamage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
