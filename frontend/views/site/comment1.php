<?php




/*
 * Team：EW_WAR
 * Coding By：黄逸轩
 * 评论1界面
*/



use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use frontend\controllers\SiteController;

$comment1 = \common\models\Comment::findAll(['New_id' => 1]);
if (sizeof($comment1) != 0)
	$comment1 = $comment1;
else $comment1 = null;

?>
<?php foreach ($comment1 as $_comment) : ?>
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
		'value' => 1
	]) ?>
</div>
<div class="form-group">
	<?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?></center>