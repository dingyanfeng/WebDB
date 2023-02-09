<?php

use common\models\news;

/*
 * Team：EW_WAR
 * Coding By：程佳诺
 * 新闻1界面
*/

$site1 = news::findAll(['id' => 1]);
if (sizeof($site1) != 0)
    $site1 = $site1[0];
else $site1 = null;
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
      <div class="headerr"><?= $site1->title ?></div>
      <div class="authorr"><?= $site1->author ?></div>
      <div class="datee"><?= $site1->release_date ?></div>
      <img class="imagee" src="news1.jpg" alt="图片">
      <div class="textt">
        <div class="contentt">
          <p>以色列前总理纳夫塔利·贝内特（Naftali Bennett）在周六（2月4日）一次公开采访中透露，他在去年俄罗斯入侵乌克兰之后访问莫斯科进行斡旋调和期间，普京曾承诺说他不会杀死乌克兰总统泽连斯基（Volodymyr Zelenskyy）。贝内特在长达五小时的线上采访中涉及了广泛的议题。</p>
          <p>时任以色列总理的贝内特在俄罗斯入侵乌克兰后的头几个星期内，成为一位当时人们不太可能想到的中间调解人，是极少数见到普京的西方国家领导人之一。他去年3月曾突然访问莫斯科，与普京会晤三个小时。</p>
          <p>美联社2月5日报道说，尽管贝内特结束战争的斡旋没有取得什么进展，但是周六对他的采访揭示了一些当时试图尽快结束战争的背后外交和其他紧急努力。</p>
          <p>贝内特在线上采访中说，他在会晤中问及普京他是否意图杀死乌克兰总统泽连斯基。他说，“我问‘你在计划杀死泽连斯基吗？’他说，‘我不会杀死泽连斯基。’我随后对他说，‘我必须要了解你在对我承诺，你不会杀死泽连斯基。’他说，‘我不会杀死泽连斯基。’”</p>
          <p>贝内特在采访中说，他后来致电泽连斯基，告诉了他普京的承诺。贝内特说，“‘听着，我刚结束会晤，他不会杀死你。’他问，‘你确定？’我说，‘百分之百（确定）他不会杀死你。’”</p>
          <p>贝内特在采访中还透露，在他斡旋期间，普京放弃了谋求解除乌克兰武装的要求，而泽连斯基也承诺不会加入北约组织。</p>
          <p>美联社说，目前还没有克里姆林宫的立即回应。俄罗斯此前曾否认乌克兰有关俄罗斯试图暗杀泽连斯基的说法。</p>
          <p>报道说，俄罗斯入侵乌克兰之际，贝内特担任以色列总理才六个月，是位仍未受过历练的领导人，但他出人意料地介入了国际调停外交。以色列面对伊朗的威胁认为保持与俄罗斯的友好关系具有战略意义，但同时他也与谋求支持乌克兰的西方国家结盟。</p>
          <p>但是，贝内特的和平努力没有取得太大进展，他自己的政治生涯也是非常短暂的。他领导的联合政府去年夏天因为内斗而垮台。</p>
          <p>url:<?= $site1->url ?></p>
        </div>
      </div>
    </div>
  </body>
</html>