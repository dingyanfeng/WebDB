<?php

/**
 * EW_WAR
 * 丁延峰
 * 关于我们
*/

$tmp = \common\models\Team::findAll(['id' => 1]);
if (sizeof($tmp) != 0)
    $tmp = $tmp[0];
else $tmp = null;

$captain = \common\models\TeamMember::findOne(['captain' => 1]);
// $captain_user = null;
// if ($captain != null)
//     $captain_user = \common\models\User::findIdentity($captain->account);

$teamers = \common\models\TeamMember::findAll(['captain' => 0]);
// $teamers_user = [];
// if (sizeof($teamers) != 3)
//     $teamers = null;
// else {
//     for ($i = 0; $i < 3; $i++)
//         $teamers_user[]=\common\models\User::findIdentity($teamers[$i]->account);
// }
?>

<section class="section" id="testmonial">
    <div class="container">
        <h3 class="section-title text-center mb-0">团队简介</h3>
        <p><?= $tmp == null ? "你的数据库没有团队简介" : $tmp->introduct ?></p>
        <h6 class="section-title text-center mb-0">我们的团队</h6>
        <h6 class="section-subtitle mb-5 text-center">——<?= $tmp->name ?></h6>
        <div class="row">
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/dyf.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $captain->name ?>
                                    <?= $tmp == null ? "专业团队" : $captain->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Captain:
                                    <a href="<?= $captain->git_link ?>"> GitHub 个人地址(下载代码) ዽ</a>
                                </small>        
                            </div>
                        </div>
                        <p class="mb-0">战争满足了，或曾经满足过人的好斗的本能，但它同时还满足了人对掠夺，破坏以及残酷的纪律和专制力的欲望。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/hyx.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[0]->name ?>
                                    <?= $tmp == null ? "专业团队" : $teamers[0]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[0]->git_link ?>"> GitHub 个人地址(下载代码) ጿ </a>
                                </small>     
                            </div>
                        </div>
                        <p class="mb-0">不知要怎样才能够结束战争，让人人都能从事农业生产，好使这普天之下再没有一个苛吏来横索税钱！</p>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="section-subtitle mb-3 text-center">ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈ ቼ ዽ ጿጿ ኈዽ ጿ</h6>
        <div class="row">
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/cjn.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[1]->name ?> 
                                    <?= $tmp == null ? "专业团队" : $teamers[1]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[1]->git_link ?>"> GitHub 个人地址(下载代码) ኈ </a> 
                                </small>     
                            </div>
                        </div>
                        <p class="mb-0">在一个充满仇恨的世界，我们仍然要满怀希望；在一个充满绝望的世界，我们仍然要敢于梦想。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 my-md-0">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center mb-3">
                            <img class="mr-3" src="assets/frontend/leadmark/public_html/assets/imgs/xjq.jpg" alt="">
                            <div class="media-body">
                                <h6 class="mt-1 mb-0">
                                    <?= $tmp == null ? "专业团队" : $teamers[2]->name ?>
                                    <?= $tmp == null ? "专业团队" : $teamers[2]->student_id ?>
                                </h6>
                                <small class="text-muted mb-0">
                                    Team Member:
                                    <a href="<?= $teamers[2]->git_link ?>"> GitHub 个人地址(下载代码) ቼ </a>
                                </small>        
                            </div>
                        </div>
                        <p class="mb-0">一次正义的战争能在高尚的国度里唤起神圣的爱的力量，这已为无数感人的事例所证实。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- BEGIN: #main -->
<div id="main">
    <!-- BEGIN: .site-section -->
    <div class="site-section bg-light">
        <!-- BEGIN: .container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a href="https://github.com/HYX20011209/webDB"
                       class="btn btn-primary btn-block">为我们的团队贡献代码</a>
                </div>
            </div>
        </div>
        <!-- END: .container -->
    </div>
    <!-- END: .site-section -->
</div>
<!-- END: #main -->