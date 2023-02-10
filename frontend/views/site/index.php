<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$cnt = 2;

//难民数据
$Refugee_poland = \common\models\Refugee::findOne(['destination' => '波兰']);
$Refugee_romania = \common\models\Refugee::findOne(['destination' => '罗马尼亚']);
$Refugee_russia = \common\models\Refugee::findOne(['destination' => '俄罗斯']);
$Refugee_hungary = \common\models\Refugee::findOne(['destination' => '匈牙利']);
$Refugee_slovakia = \common\models\Refugee::findOne(['destination' => '斯洛伐克']);
$Refugee_moldova = \common\models\Refugee::findOne(['destination' => '摩尔多瓦']);
$Refugee_belarus = \common\models\Refugee::findOne(['destination' => '白俄罗斯']);




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
                    <span class="caption mb-3 d-block"></span>
                    <!--发送通知信息-->
                    <?php
                    if (isset($message))
                        echo "<h1 class=\"heading\">" . $message . "</h1>";
                    if(isset($_GET['message']))
                        echo "<h1 class=\"heading\">" . $_GET['message'] . "</h1>";
                    else echo "<h1 class=\"heading\"></h1>";
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
        <h6 class="section-title text-center">乌克兰难民去向分析</h6>
        <h6 class="section-subtitle mb-5 text-center">Analysis of the whereabouts of Ukrainian refugees</h6>
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                Destination
            </a>
            <a href="#" data-filter=".advertising">
                Nightingale
            </a>
            <a href="#" data-filter=".branding">
                View
            </a>
        </div>
        <div class="portfolio-container"> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/poland.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/poland.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">波兰</h6>
                            <p class="subtitle"><?= number_format($Refugee_poland->num) ?></p>
                        </div>
                    </div>   
                </div>             
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/romania.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/romania.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">罗马尼亚</h6>
                            <p class="subtitle"><?= number_format($Refugee_romania->num) ?></p>
                        </div>
                    </div> 
                </div>                         
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/russia.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/russia.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">俄罗斯</h6>
                            <p class="subtitle"><?= number_format($Refugee_russia->num) ?></p>
                        </div>
                    </div>    
                </div>              
            </div> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/hungary.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/hungary.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">匈牙利</h6>
                            <p class="subtitle"><?= number_format($Refugee_hungary->num) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>

            <div class="col-md-6 col-lg-4 new"> 
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/slovakia.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/slovakia.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">斯洛伐克</h6>
                            <p class="subtitle"><?= number_format($Refugee_slovakia->num) ?></p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/moldova.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/moldova.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">摩尔多瓦</h6>
                            <p class="subtitle"><?= number_format($Refugee_moldova->num) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/belarus.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/belarus.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">白俄罗斯</h6>
                            <p class="subtitle"><?= number_format($Refugee_belarus->num) ?></p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 advertising">
                <div id="container" style="height: 600%;width: 300%"></div>
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
                <script type="text/javascript">
                    var dom = document.getElementById('container');
                    var myChart = echarts.init(dom, null, {
                    renderer: 'canvas',
                    useDirtyRect: false
                    });
                    var app = {};
                    
                    var option;

                    option = {
                    legend: {
                        top: 'bottom'
                    },
                    toolbox: {
                        show: true,
                        feature: {
                        mark: { show: true },
                        dataView: { show: true, readOnly: false },
                        restore: { show: true },
                        saveAsImage: { show: true }
                        }
                    },
                    series: [
                        {
                        name: 'Nightingale Chart',
                        type: 'pie',
                        radius: [50, 250],
                        center: ['50%', '50%'],
                        roseType: 'area',
                        itemStyle: {
                            borderRadius: 7
                        },
                        data: [
                            { value: <?= $Refugee_poland->num ?>, name: '波兰' },
                            { value: <?= $Refugee_romania->num ?>, name: '罗马尼亚' },
                            { value: <?= $Refugee_russia->num ?>, name: '俄罗斯' },
                            { value: <?= $Refugee_hungary->num ?>, name: '匈牙利' },
                            { value: <?= $Refugee_slovakia->num ?>, name: '斯洛伐克' },
                            { value: <?= $Refugee_moldova->num ?>, name: '摩尔多瓦' },
                            { value: <?= $Refugee_belarus->num ?>, name: '白俄罗斯' }
                        ]
                        }
                    ]
                    };

                    if (option && typeof option === 'object') {
                    myChart.setOption(option);
                    }

                    window.addEventListener('resize', myChart.resize);
                </script>
            </div>
            <div class="col-md-6 col-lg-7 branding">
                <img src="assets/frontend/leadmark/public_html/assets/imgs/EW_refugee.jpg" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4 branding">
                <a href="https://www.aljazeera.com/">图片来源:半岛电视台</a>
            </div>
        </div>   
    </div>            
</section>
<!-- End of portfolio section -->



<!-- Blog Section -->
<section class="section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center">Latest Articles</h6>
        <h6 class="section-subtitle mb-5 text-center">注：本网站为南开大学学生作业，网站提供数据仅为练习，不负任何法律责任，请勿当真。</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">俄乌历次冲突汇总</h6>
                        <p>整理了俄乌双方各次冲突的时间、地点、投入兵力、伤亡情况等</p>
                        <a href="index.php?r=collision%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">俄罗斯战损</h5>
                        <p>统计俄罗斯在战争中武器消耗情况</p>
                        <a href="index.php?r=rwardamage%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">乌克兰战损</h6>
                        <p>统计乌克兰在战争中武器消耗情况</p>
                        <a href="index.php?r=uwardamage%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-md-5 my-3">
                <h6 class="mb-0">Phone</h6>
                <p class="mb-4">+ 123-456-7890</p>

                <h6 class="mb-0">Address</h6>
                <p class="mb-4">12345 Fake ST NoWhere AB Country</p>

                <h6 class="mb-0">Email</h6>
                <p class="mb-0">info@website.com</p>
                <p></p>
            </div> -->
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <!-- 导航栏BEGIN: .widget -->
                <div class="widget">
                    <h3>关于本站</h3>
                    <ul class="nav-link">
                        <li><a href="<?= \yii\helpers\Url::to(['/site/index']); ?>">主页</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/about']); ?>">关于</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/news']); ?>">新闻</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/error']); ?>">404页面</a></li>
                    </ul>
                </div>
                <!-- END: .widget -->
            </div>
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <!-- BEGIN: .widget -->
                <div class="widget">
                    <h3>相关网站</h3>
                    <ul class="nav-link">
                        <li><a href="https://www.aljazeera.com/">半岛电视台</a></li>
                        <li><a href="https://www.zhihu.com/">去知乎搜索</a></li>
                        <li><a href="https://www.baidu.com/">去百度搜索</a></li>
                        <li><a href="http://www.xinhuanet.com/">新华网</a></li>
                    </ul>
                </div>
                <!-- END: .widget -->
            </div>
            <div class="col-md-7">
                <form>
                    <h4 class="mb-4">让你的信息显示在页面顶部</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="姓名">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="电子邮箱">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="主题">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="内容"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                        </div>                          
                    </div>                          
                </form>
            </div>  
        </div> 
        <footer id="footer">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-6 order-2 text-center text-md-right"><a href="#" class="js-top"><span
                                    class="icon-long-arrow-up mr-2"></span> 返回顶部</a></div>
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, The Module comes from <a href="https://www.free-css.com/" target="_blank">Free CSS.</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>