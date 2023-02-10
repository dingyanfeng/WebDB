<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <center>
        <h1><?= Html::encode($this->title) ?></h1>
    </center>

    <center>
        <p>Please fill out the following fields to signup:</p>
    </center>



    <div class="row justify-content-center">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'account')->textInput(['autofocus' => true]) ?>



            <?= $form->field($model, 'username')->passwordInput() ?>

            <?= $form->field($model, 'tel')->passwordInput() ?>

            <?= $form->field($model, 'password')->passwordInput() ?>




            <center>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            </center>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>