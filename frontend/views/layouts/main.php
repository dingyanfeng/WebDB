<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset_b;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
AppAsset_b::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Start your development with LeadMark landing page.">
            <meta name="author" content="Devcrud">
            <title>俄乌战争快讯</title>
            <!-- font icons -->
            <link rel="stylesheet" href="assets/frontend/leadmark/public_html/assets/vendors/themify-icons/css/themify-icons.css">
            <!-- Bootstrap + LeadMark main styles -->
            <link rel="stylesheet" href="assets/frontend/leadmark/public_html/assets/css/leadmark.css">
        </head>
        <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
        <?php $this->beginBody() ?>

        <div class="site-wrap">
            <!-- Page Header -->
            <header class="header">
                <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
                    <div class="container">
                        <!--  导航栏左侧logo BEGIN: .navbar-brand -->
                        <a class="navbar-brand" href="<?php echo Yii::$app->getHomeUrl(); ?>">
                            <img src="assets/frontend/leadmark/public_html/assets/imgs/logo.svg" alt="Covid" id="logo_dark">
                        </a>
                        <!-- END: .navbar-brand -->

                        <!-- 不清楚有什么效果 BEGIN: .navbar-toggler -->
                        <a href="#" class="burger-toggle-menu js-burger-toggle-menu ml-auto py-4" data-toggle="collapse"
                        data-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                        aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">                     
                                <li class="nav-item">
                                    <a class="nav-link" href="#service">Our Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#portfolio">难民去向</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a href="components.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Components</a>
                                </li>
                            </ul>
                        </div>
                        <!-- 导航栏 BEGIN: #main-nav  TODO 导航栏调转-->
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="navbar-nav ml-auto">
                                <?php

                                $menuItems = [
                                    ['label' => '主页', 'url' => ['/site/index']],
                                    ['label' => '新闻', 'url' => ['/site/news']],
                                    ['label' => '关于', 'url' => ['/site/about']],
                                    //这里做文章，最后改为想打开的php文件名,然后controller里增添对应action某某
                                    ['label' => '援助', 'url' => ['/usupport/index']],
                                ];

                                if (Yii::$app->user->isGuest) {
                                    $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
                                    $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
                                } else {
                                    $menuItems[] = ['label' => '健康日报', 'url' => ['/site/healthreport']];
                                    $menuItems[] = ['label' => '修改信息', 'url' => ['/site/modify']];


                                    if (Yii::$app->user->identity->type == '1') {
                                        $menuItems[] = ['label' => '后台管理', 'url' => ['/backend/site/index']];
                                    }

                                    $menuItems[] = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><span>"
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . "<button class='btn btn-outline-secondary'>登出("
                                        . Yii::$app->user->identity->username . ')'
                                        . "</button>"
                                        . Html::endForm()
                                        . '</span></li>';

                                }

                                echo Nav::widget([
                                    'options' => ['class' => 'nav-item'],
                                    'items' => $menuItems
                                ]);
                                ?>
                            </ul>
                        </div>
                        <!-- END: #main-nav -->
                    </div>
                </nav>
                <div class="overlay">
                    <h1 class="subtitle">我们在关注</h1>
                    <h1 class="title">俄乌战争快讯</h1>  
                </div>  
                <div class="shape">
                    <svg viewBox="0 0 1500 200">
                        <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
                    </svg>
                </div>  
                <div class="mouse-icon"><div class="wheel"></div>
                <!-- Add '.navbar_dark' class if you want the color of the text to -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">

                        
                        <!-- END: .navbar-toggler -->
                    </div>
                </nav>
            </header>
            <!-- END: #site-header -->
            <!--      这里是页面显示的部分-->
            <div>
                <?= $content ?>
            </div>
            <!-- BEGIN: .cover -->
            <!-- END: .cover -->

            <!-- BEGIN: #main -->
            <!-- END: #main -->
        </div>

        <!-- <script src="assets/frontend/js/jquery-3.4.1.min.js"></script>
        <script src="assets/frontend/js/popper.min.js"></script>
        <script src="assets/frontend/js/bootstrap.min.js"></script>
        <script src="assets/frontend/js/jquery.waypoints.min.js"></script>
        <script src="assets/frontend/js/jquery.animateNumber.min.js"></script>
        <script src="assets/frontend/js/tiny-slider.js"></script>
        <script src="assets/frontend/js/jquery.fancybox.min.js"></script>
        <script src="assets/frontend/js/jquery.lavalamp.min.js"></script>
        <script src="assets/frontend/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/frontend/js/jquery.validate.min.js"></script>
        <script src="assets/frontend/js/jquery.easing.1.3.js"></script>
        <script src="assets/frontend/js/main.js"></script> -->

        <!-- core  -->
        <script src="assets/frontend/leadmark/public_html/assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/frontend/leadmark/public_html/assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap 3 affix -->
        <script src="assets/frontend/leadmark/public_html/assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- Isotope -->
        <script src="assets/frontend/leadmark/public_html/assets/vendors/isotope/isotope.pkgd.js"></script>

        <!-- LeadMark js -->
        <script src="assets/frontend/leadmark/public_html/assets/js/leadmark.js"></script>

        <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage();