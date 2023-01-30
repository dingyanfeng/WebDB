<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$cnt = 2;
// $this->title = 'My Yii Application';
?>
<!-- BEGIN: .cover -->
<!-- <div class="cover overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                
            </div>
        </div>
    </div>
</div> -->

<section class="banner_main">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="text-bg">
                    <span class="caption mb-3 d-block">欢迎来到平安社区</span>
                    <!--发送通知信息-->
                    <?php
                    if (isset($message))
                        echo "<h1 class=\"heading\">" . $message . "</h1>";
                    if(isset($_GET['message']))
                        echo "<h1 class=\"heading\">" . $_GET['message'] . "</h1>";
                    else echo "<h1 class=\"heading\">守护社区平安，我们在行动</h1>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- About Section -->
<section class="section" id="about">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                <h6 class="section-title mb-0">About Company</h6>
                <h6 class="section-subtitle mb-4">Architecto provident deserunt</h6>
                <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate molestiae temporibus et tenetur unde quasi, cum nemo quo, molestias architecto alias voluptatibus corrupti corporis earum. Necessitatibus maxime modi ipsam, quod!</p>
                <img src="assets/frontend/leadmark/public_html/assets/imgs/about.jpg" alt="" class="w-100 mt-3 shadow-sm">
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row">
                    <div class="col-6">
                        <img src="assets/frontend/leadmark/public_html/assets/imgs/about-1.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-6">
                        <img src="assets/frontend/leadmark/public_html/assets/imgs/about-2.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-12 mt-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo iusto quidem laborum atque, sapiente ipsa excepturi fuga cum sed in assumenda eos quasi harum culpa laboriosam nulla, incidunt quae. Voluptatum.</p>
                        <p><b>Aliquid fuga sunt velit, temporibus molestias ab. Ipsa nesciunt totam, aliquid dignissimos.</b><br>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ut a dolorem, consectetur, eos suscipit consequatur magnam est dolore obcaecati adipisci expedita, vero, iste ducimus qui numquam animi facilis officia?</p>
                    </div>
                </div>
            </div>
        </div>              
    </div>
</section>
<!-- End OF About Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">Our Portfolio</h6>
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                New
            </a>
            <a href="#" data-filter=".advertising">
                Advertising
            </a>
            <a href="#" data-filter=".branding">
                Branding
            </a>
            <a href="#" data-filter=".web">
                Web
            </a>
        </div>
        <div class="portfolio-container"> 
            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/web-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/web-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>   
                </div>             
            </div>
            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/web-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/web-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div> 
                </div>                         
            </div>
            <div class="col-md-6 col-lg-4 advertising new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/advertising-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/advertising-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>    
                </div>              
            </div> 
            <div class="col-md-6 col-lg-4 web">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/web-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/web-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div>

            <div class="col-md-6 col-lg-4 advertising"> 
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/advertising-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/advertising-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 web new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/web-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/web-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">WEB</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 advertising new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/advertising-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/advertising-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERSITING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 advertising new"> 
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/advertising-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/advertising-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">ADVERTISING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>
                        
            </div> 
            <div class="col-md-6 col-lg-4 branding new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/branding-1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/branding-1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div> 
                </div>
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/branding-2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/branding-2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                     
            </div> 
            <div class="col-md-6 col-lg-4 branding new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/branding-3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/branding-3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                    
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/branding-4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/branding-4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                      
            </div> 
            <div class="col-md-6 col-lg-4 branding">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/branding-5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/branding-5.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">BRANDING</h6>
                            <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                        </div>
                    </div>
                </div>                                                   
            </div>
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->

<!-- Blog Section -->
<section class="section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center">Latest Articles</h6>
        <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">Pariatur Omnis Harum quae sint.</h6>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title"> Harum Quae Porro</h5>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">Qui optio neque alias</h6>
                        <p>Fuga quae ratione inventore Perferendis porro.</p>
                        <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Testmonial Section -->
<section class="section" id="testmonial">
    <div class="container">
        <h6 class="section-title text-center mb-0">Testmonials</h6>
        <h6 class="section-subtitle mb-5 text-center">What Our Clients Says</h6>
        <div class="row">
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/avatar.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">John Doe</h6>
                                <small class="text-muted mb-0">Business Analyst</small>     
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/avatar-1.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                <small class="text-muted mb-0">Insurance Agent</small>      
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/avatar-2.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">Mason Miller</h6>
                                <small class="text-muted mb-0">Residential Appraiser</small>        
                            </div>
                        </div>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Testmonial Section -->

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 my-3">
                <h6 class="mb-0">Phone</h6>
                <p class="mb-4">+ 123-456-7890</p>

                <h6 class="mb-0">Address</h6>
                <p class="mb-4">12345 Fake ST NoWhere AB Country</p>

                <h6 class="mb-0">Email</h6>
                <p class="mb-0">info@website.com</p>
                <p></p>
            </div>
            <div class="col-md-7">
                <form>
                    <h4 class="mb-4">Drop Us A Line</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                        </div>                          
                    </div>                          
                </form>
            </div>  
        </div> 
        <!-- BEGIN: #footer -->
        <footer id="footer">
            <div class="container">

                <!--       页脚  BEGIN: .footer-subscribe -->
                <div class="row footer-subscribe">
                    <div class="col-md-9">
                        <h3 class="mt-2">生命重于泰山，疫情就是命令，防控就是责任。</h3>
                    </div>
                    <!--                    这段注释掉的是一个邮件注册，由于没有用，就注册掉了-->
                    <!--                    <div class="col-md-6">-->
                    <!--                        <form action="#" id="mc-form" class="form-subscribe">-->
                    <!--                            <div class="d-flex align-items-stretch w-100">-->
                    <!--                                <input type="email" id="mc-email" placeholder="Email address" class="form-control">-->
                    <!--                                <input type="submit" value="Sign up" class="btn btn-outline-white-reverse">-->
                    <!--                            </div>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <label for="mc-email"></label>-->
                    <!--                            </div>-->
                    <!--                        </form>-->
                    <!--                    </div>-->
                </div>
                <!-- END: .footer-subscribe -->

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">

                        <!-- 导航栏BEGIN: .widget -->
                        <div class="widget">
                            <h3>功能</h3>
                            <ul class="nav-link">
                                <li><a href="<?= \yii\helpers\Url::to(['/site/index']); ?>">主页</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/about']); ?>">关于</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/news']); ?>">新闻</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/error']); ?>">404页面</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">防疫教学</a></li>
                            </ul>
                        </div>
                        <!-- END: .widget -->


                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <!-- BEGIN: .widget -->

                        <div class="widget">
                            <h3>相关网站</h3>
                            <ul class="nav-link">
                                <li><a href="http://www.nhc.gov.cn/">国家卫健委</a></li>
                                <li><a href="https://ncov.dxy.cn/ncovh5/view/pneumonia?from=timeline">丁香医生实时疫情数据</a>
                                </li>
                                <li><a href="http://www.piyao.org.cn/2020yqpy/">辟谣专区</a></li>
                                <li><a href="http://www.nhc.gov.cn/xcs/kpzs/list_gzbd.shtml">防疫小知识</a></li>
                                <li><a href="https://www.chinavolunteer.cn/app/user/login.php">报名志愿者</a></li>
                            </ul>
                        </div>


                        <!-- END: .widget -->
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <!-- BEGIN: .widget -->
                        <div class="widget">
                            <h3>防疫小贴士</h3>
                            <ul class="nav-link">
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">勤洗手</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">戴口罩</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">宅家中</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">量体温</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/site/prevention']); ?>">护家人</a></li>
                            </ul>
                        </div>
                        <!-- END: .widget -->
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="d-block">
                            <ul class="list-unstyled d-flex social-29021">
                                <li><a href="#"><span class="icon-qq"></span></a></li>
                                <li><a href="#"><span class="icon-weixin"></span></a></li>
                                <li><a href="#"><span class="icon-weibo"></span></a></li>
                                <li><a href="#"><span class="icon-television"></span></a></li>
                            </ul>
                        </div>

                        <div class="d-block mb-4">
                            <a href="#" class="d-flex call align-items-center">
                                <span class="lni lni-mobile wrap-icon"></span>
                                <span class="number">110 120 119</span>
                            </a>
                        </div>
                        <div class="d-block">
                            <p>有任何问题请联系管理员</p>
                            <p><a href="#"
                                class="link-underline text-primary">这是个邮箱@南开.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- BEGIN: .copyright -->
                <div class="row copyright">
                    <div class="col-md-6 order-2 text-center text-md-right"><a href="#" class="js-top"><span
                                    class="icon-long-arrow-up mr-2"></span> 返回顶部</a></div>
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, LeadMark Created By <a href="https://www.devcrud.com" target="_blank">DevCrud.</a>  All rights reserved </p>
                    </div>
                </div>
                <!-- END: .copyright -->
            </div>
        </footer>
        <!-- END: #footer -->
    </div>
</section>