<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\views\Collision $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="collision-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'rforce')->textInput() ?>

    <?= $form->field($model, 'uforce')->textInput() ?>

    <?= $form->field($model, 'rinjury')->textInput() ?>

    <?= $form->field($model, 'uinjury')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
