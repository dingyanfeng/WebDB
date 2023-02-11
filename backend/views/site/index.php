<?php

/** @var yii\web\View $this */

$this->title = '管理员页面';
?>
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
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Administrator management page</h1>

        <p class="lead">The administrator can manage comments, users and other information on this page.</p>

    </div>
    
        <div class="body-content">

            <div class="row">
                <div class="col-lg-6">
                    <h2>用户信息页面</h2>

                    <p>通过该部分，管理员可以获取用户的基本信息，当然，我们假设管理员具有相同的权限，所有这里的用户限制为非管理员用户.</p>

                    <p><a class="btn btn-outline-secondary" href="index.php?r=site%2Fuserinfo">用户信息获取 &raquo;</a></p>
                </div>
                <div class="col-lg-6">
                    <h2>评论详情及删除</h2>

                    <p>通过该部分，管理员可以查看所有新闻对应的评论，该部分通过显示新闻ID和评论ID实现，同时，为了维护评论区的和谐，管理员具有删除评论的权利，通过输入对应的评论ID即可实现删除功能.</p>

                    <p><a class="btn btn-outline-secondary" href="index.php?r=site%2Fmanagecomments">评论管理 &raquo;</a></p>
                </div>

            </div>

        </div>
    
</div>
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
