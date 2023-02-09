<?php

use common\models\news;

/*
 * Team：EW_WAR
 * Coding By：程佳诺
 * 新闻5界面
*/

$site5 = news::findAll(['id' => 5]);
if (sizeof($site5) != 0)
    $site5 = $site5[0];
else $site5 = null;
?>


<html>
  <head>
    <style>
      .containerr {
        width: 66.6%;
        margin: 0 auto;
        border: 10px solid #333;
        border-radius: 20px;
        background-color: black;
        padding: 20px;
      }

      .headerr {
        font-size: 36px;
        font-family: Songti;
        font-weight: bold;
        text-align: center;
        color: white;
      }

      .authorr {
        font-size: 20px;
        font-family: Songti;
        text-align: right;
        color: white;
      }

      .datee {
        font-size: 20px;
        font-family: Songti;
        text-align: right;
        color: white;
      }

      .imagee {
        width: 35%;
        height: auto;
        object-fit: contain;
        margin: 20px auto;
        display: block;
      }

      .textt {
        font-size: 15px;
        font-family: "WenQuanYi Zen Hei";
        line-height: 1.5;
        text-align: left;
        color: white;
        text-indent: 2em;
      }

      .contentt {
        width: 60%;
        margin: 0 auto;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="containerr">
      <div class="headerr"><?= $site5->title ?></div>
      <div class="authorr"><?= $site5->author ?></div>
      <div class="datee"><?= $site5->release_date ?></div>
      <img class="imagee" src="news5.jpg" alt="图片">
      <div class="textt">
        <div class="contentt">
          <p>临阵换将本是兵家大忌，但俄乌战争正值胶着之际，乌克兰却传出国防部长即将换人的消息。一位接近总统泽连斯基的人士表示，因国防部频发贪腐丑闻，现任国防部长列兹尼科夫蒙受巨大压力，因此将被调任其他重要职位，不过具体时间不详。 </p>
          <p>此次人事变动何时正式公布，目前尚不清楚。总统泽连斯基所属的"人民公仆"党议会党团主席阿拉查米亚（ David Arachamija）在社交平台Telegram发布的消息称，现任军事情报局局长37岁的布达诺夫（ Kyrylo Budanow）将接任国防部长一职。</p>
          <p>阿拉查米亚表示，在战时状态下做出上述决定完全符合"逻辑"，"在战争状态下，国防部应由有安全背景的专业人员，而不是由一名政治家来领导。"阿拉查米亚拒绝透露本次人事变更的具体时间。稍后，他又发文称，"本周内，国防部系统不会出现人事变动。"</p>
          <p>据悉，从2021年起担任国防部长的列兹尼科夫（Olexij Resnikow）将出任战略工业部长一职。因国防部内发生一系列贪腐及浪费丑闻，现年56岁、法学家出身的列兹尼科夫引起广泛批评。此前，国防部副部长沙波瓦洛夫（ Wjatscheslaw Schapowalow）因高价购买军队给养一事已被迫引咎辞职。媒体报道称，此前国防部内其他部门还曾发生过军营建设费用被贪污占用的丑闻。</p>
          <P>列兹尼科夫否认了针对他本人的各项指控，并称这是有人试图"在此重要关头，玷污国防部的信誉"，他本人"绝对问心无愧"。列兹尼科夫表示，他不会主动辞职，"依照乌克兰宪法，国防部长的人选只能由身为乌克兰最高军事长官的总统泽连斯基来定夺。"截至目前，乌克兰总统泽连斯基尚未就此事做出公开表态。</p>
          <p>一年来一直在抵御俄罗斯入侵的乌克兰，普遍被视为是欧洲境内腐败问题最为严重的国家。该国军事支出的绝大部分目前依赖于西方国家的援助。 </p>
          <p>url:<?= $site5->url ?></p>
        </div>
      </div>
    </div>
  </body>
</html>