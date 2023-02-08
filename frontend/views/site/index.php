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
                <h6 class="section-title mb-0">关于俄乌战争</h6>
                <h6 class="section-subtitle mb-4">俄乌战争简介</h6>
                <p >俄乌战争[97][98][99]（乌克兰语：російсько-українська війна；俄语：российско-украинская война）是2014年2月20日起俄罗斯与乌克兰之间一场旷日持久的混合战争[100]，前期以低强度战争方式进行，[101]2022年2月24日俄罗斯[102]总统普京以“非军事化、去纳粹化”为战争借口动员俄军侵略乌克兰[103][104][105]，冲突正式白热化为全面战争，且迅速发展为二战后欧洲最大规模的军事对抗，并被普遍视为侵略[106]。</p>
                <p >引发战争的背景缘由众多，包括苏联解体后该区域的乌克兰化、去俄罗斯化、境内俄裔俄罗斯民族主义所致国族认同分裂[107]、“北约东扩”引发俄罗斯的不安全感[108]、俄罗斯在苏联地区重建影响力[109]、俄罗斯的扩张主义传统[110]等。导火索为乌克兰亲欧示威后亲俄总统维克托·亚努科维奇下台、随后于乌克兰东部南部爆发的克里米亚吞并和顿巴斯战争[111][112]。</p>
                <p >西方世界认为俄罗斯侵略乌克兰的原因包括缺乏天然屏障、设法取得不冻港、与相邻北约国家的缓冲地带减少、部分天然气管道受制于乌克兰、对外扩张争取更多资源及维持其支持度等[110]。在2022年6月9日与青年企业家会晤中，普京间接承认了其侵略目的是为了如同俄国沙皇彼得大帝一般扩张领土而发动战争[113]。</p>
                <p >在2014年9月和2015年2月，俄乌签署旨在化解乌克兰武装部队和乌克兰东部亲俄武装冲突的《明斯克协议》与《新明斯克协议》，此后主要战争行为结束但仍有冲突发生，俄乌双方多次指责对方违反停火协议[114]。2019年10月至12月，乌克兰爆发不投降运动抗议政府对顿巴斯地区的妥协。</p>
                <img src="assets/frontend/leadmark/public_html/assets/imgs/aabout.jpg" alt="" class="w-100 mt-3 shadow-sm">
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="row">
                    <div class="col-6">
                        <img src="assets/frontend/leadmark/public_html/assets/imgs/aabout-1.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-6">
                        <img src="assets/frontend/leadmark/public_html/assets/imgs/aabout-2.jpg" alt="" class="w-100 shadow-sm">
                    </div>
                    <div class="col-12 mt-4">
                        <p>2021年3月开始，乌克兰总统弗拉基米尔·泽连斯基签署夺回顿巴斯地区的总统令并视察前线，同时乌军加强在前线的兵力部署，开始频繁与乌东武装交火[115]。同年12月，俄罗斯于俄乌边境屯兵超过10万人[116]。俄乌边境出现二战以来欧洲最大的军事动员[117]。2022年1月，在德法俄乌“诺曼底模式”四方会谈首脑政治顾问会议召开前，乌克兰最高拉达撤回一项《关于过渡期的国家政策》方案，里面将俄罗斯定性为“侵略国”，这被视作为谈判释放缓和信号[118]。</p>
                        <p>2022年2月24日正式宣战前，俄罗斯政府称战争状态为乌克兰政府单方面宣称，否认有任何参与[119]，并称所有涉及乌境内冲突的俄方人员均为“志愿军”[120]。</p>
                        <p>2022年伊始，局势紧张程度进一步上升。美国情报部门曾认为基辅时间2022年2月16日凌晨3点是俄罗斯向乌克兰出兵20万大军的时间[121]，俄方则称俄军在15日撤离了边境，受该情报影响，乌克兰汇率直降、外国资本逃离、航班停飞[122]。2022年2月21日，俄罗斯宣布承认顿涅茨克人民共和国和卢甘斯克人民共和国[123]，并签署友好合作互助条约[124]，根据协议，俄军“维和部队”进入顿巴斯协助抵御乌军[125]，并获得建立军事基地的权利[126]。次日俄罗斯联邦委员会准许总统在境外动武[127]。24日清晨，俄罗斯兵分四路从东、南、北、东北四个方向入侵乌克兰[128]。25日，首批俄军攻入乌克兰首都基辅附近[129]。26日，俄乌双方在基辅外围展开巷战[130]。28日，双方展开首轮谈判。3月2日俄军攻占乌克兰南部重要战略城市赫尔松，该市成为开战以来俄军攻占的首个主要城市[131]。3月3日，双方再次展开谈判[132]。7日，双方展开第三轮谈判[133]。10日，两国外长在土耳其举行会谈[134]。11日，俄军首次向乌克兰西部发起进攻[135]。14日，双方开展第四轮谈判[136]。29日，双方举行第五轮谈判[137]。</p>
                    </div>
                </div>
            </div>
        </div>              
    </div>
</section>
<!-- End OF About Section -->

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
        <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                Destination
            </a>
            <a href="#" data-filter=".advertising">
                Nightingale
            </a>
            <a href="#" data-filter=".branding">
                None
            </a>
            <a href="#" data-filter=".web">
                None
            </a>
        </div>
        <div class="portfolio-container"> 
            <div class="col-md-6 col-lg-4 web new">
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
            <div class="col-md-6 col-lg-4 web new">
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
            <div class="col-md-6 col-lg-4 web new">
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
            <div class="col-md-6 col-lg-4 web new">
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
                <!-- Uncomment this line if you want to dataTool extension
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/dataTool.min.js"></script>
                -->
                <!-- Uncomment this line if you want to use gl extension
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
                -->
                <!-- Uncomment this line if you want to echarts-stat extension
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
                -->
                <!-- Uncomment this line if you want to use map
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
                -->
                <!-- Uncomment these two lines if you want to use bmap extension
                <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/bmap.min.js"></script>
                -->

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
            <!-- <div class="col-md-6 col-lg-4 advertising new"> 
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
            </div> -->
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