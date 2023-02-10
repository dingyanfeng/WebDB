<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CollisionSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="collision-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'rforce') ?>

    <?= $form->field($model, 'uforce') ?>

    <?= $form->field($model, 'rinjury') ?>

    <?php // echo $form->field($model, 'uinjury') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
