<?php

/*
 * Team：EW_WAR
 * Coding By：丁延峰，黄逸轩
 * 用户信息
*/


$user = \common\models\User::findAll(['type' => 0]);
$cnt = sizeof($user);


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
                            <h6 class="text-white my-3">Account</h6>
                            <h6 class="text-white my-3">UserName</h6>
                            <h6 class="text-white my-3">Tel</h6>
                        </div>
                        <?php if ($user != null)
                        
	                    foreach ($user as $_user) : ?>
                        <div class="d-flex justify-content-between border-bottom px-4">
                            <h6 class="text-white my-3"><?= $_user->account?></h6>
                            <h6 class="text-white my-3"><?= $_user->username?></h6>
                            <h6 class="text-white my-3"><?= $_user->tel?></h6>
                        </div>
                        <?php endforeach; ?>
                        
                         
                        <h5 class="text-white py-3 px-4 m-0"> Total User: <?= $cnt?> </h5> 
                        

                    </div>

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