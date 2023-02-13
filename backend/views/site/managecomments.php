<?php

/*
 * Team：EW_WAR
 * Coding By：丁延峰，黄逸轩
 * 评论管理
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\controllers\SiteController;
use common\models\Comment;

$news = \common\models\news::find()->all();
$comment = \common\models\Comment::find()->all();
$cnt = sizeof($comment);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edukate - Online Education Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/backTemplate/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/backTemplate/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    

    


    <!-- Detail Start -->


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                

                <center><div class="col-lg-8 mt-5 mt-lg-0">

                    <div class="bg-primary mb-5 py-3">

                        <h3 class="text-white py-3 px-4 m-0">User Info</h3>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3">NewsId</h6>
                            <h6 class="text-white my-3">CommentId</h6>
                            <h6 class="text-white my-3">Content</h6>
                            <h6 class="text-white my-3">author</h6>
                        </div>
                        <?php if ($news != null) 
	                    foreach ($news as $_news) : ?>
                            <?php $comment_temp = \common\models\Comment::findAll(['New_id' => $_news->id]);?>

                            
                            <?php if ($comment_temp != null) 
                            foreach ($comment_temp as $_comment) : ?>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-white my-3"><?= $_comment->New_id?></h6>
                                    <h6 class="text-white my-3"><?= $_comment->id?></h6>
                                    <h6 class="text-white my-3"><?= $_comment->content?></h6>
                                    <h6 class="text-white my-3"><?= $_comment->author?></h6>

                                </div>
                                
                            <?php endforeach; ?>

                        <?php endforeach; ?>

                    </div>
                    
                    
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group">
                        <h2><?= $form->field($model, 'id')->textInput(['autofocus' => true]) ?></h2>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div></center>

            </div>
        </div>
    </div>
    <!-- Detail End -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/backTemplate/lib/easing/easing.min.js"></script>
    <script src="assets/backTemplate/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/backTemplate/lib/counterup/counterup.min.js"></script>
    <script src="assets/backTemplate/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/backTemplate/js/main.js"></script>
</body>

</html>