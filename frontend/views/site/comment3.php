<?php




/*
 * Team：EW_WAR
 * Coding By：黄逸轩
 * 评论3界面
*/



use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use frontend\controllers\SiteController;

$comment3 = \common\models\Comment::findAll(['New_id' => 3]);
if (sizeof($comment3) != 0)
	$comment3 = $comment3;
else $comment3 = null;

?>
<?php if ($comment3 != null)
    foreach ($comment3 as $_comment) : ?>
	<div class="comments-list-wrap">
		<div class="comment-list">
			<div class="single-comment-body">
				<div class="comment-text-body">
					<h4> <?= $_comment->author ?></h4>
					<p><?= $_comment->content ?></p>
				</div>
			</div>
		</div>
	</div>
	<br>
<?php endforeach; ?>


<center><?php $form = ActiveForm::begin(); ?>
<div class="form-group">
	<h2><?= $form->field($model, 'content')->textInput(['autofocus' => true]) ?></h2>
</div>
<div class="form-group" style="display: none">
	<?= $form->field($model, 'author')->textInput([
		'value' => Yii::$app->user->getIsGuest() ? "匿名" : Yii::$app->user->getIdentity()->username
	]) ?>
</div>
<div class="form-group" style="display: none">
	<?= $form->field($model, 'New_id')->textInput([
		'value' => 3
	]) ?>
</div>
<div class="form-group">
	<?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?></center>