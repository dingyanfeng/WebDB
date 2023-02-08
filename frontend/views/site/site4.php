<?php

use common\models\news;

/*
 * Team：EW_WAR
 * Coding By：程佳诺
 * 新闻4界面
*/

$site4 = news::findAll(['id' => 4]);
if (sizeof($site4) != 0)
    $site4 = $site4[0];
else $site4 = null;
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
      <div class="headerr"><?= $site4->title ?></div>
      <div class="authorr"><?= $site4->author ?></div>
      <div class="datee"><?= $site4->release_date ?></div>
      <img class="imagee" src="news4.jpg" alt="图片">
      <div class="textt">
        <div class="contentt">
          <p>作家托马斯·弗里德曼(Thomas Friedman)表示，俄乌战争的第二年即将于本月开始。而一方面，俄罗斯人正在做大量准备工作，另一方面，西方国家坚持大力支持乌克兰。这一年将非常可怕。</p>
          <p>弗里德曼在《纽约时报》的一篇文章中指出，显然，如今俄罗斯总统弗拉基米尔·普京已决定将军队人数增加一倍。最近几个月，他动员了多达50万名新士兵，以在战争一周年之际发起一场新战役。</p>
          <p>他补充道，美国及其盟友在这场战争的第一年经历了轻松的局面。因为除了对莫斯科实施制裁外，它仅限于提供武器、援助和情报。另一方面，乌克兰人则负责做剩下的事情，即摧毁普京的军队并将他的军队逼退到乌克兰东部。</p>
          <p>但根据弗里德曼的说法，普京正在将俄罗斯社会全面军事化，就像已故苏联领导人约瑟夫·斯大林在二战期间所做的那样。他还准备打一场持久战，准备让俄罗斯不那么安全，以实现传统的俄罗斯大国野心。这些野心更多的是关于荣誉和身份而不是安全。</p>
          <P>作者还认为，普京把赌注押在美国和西方将厌倦长期冲突的可能性。美国智库和国会中的左翼和右翼孤立主义者都表明他们会如此。</p>
          <p>然而，弗里德曼表示，无论付出什么代价，西方都不会放弃支持乌克兰。因为它知道，任何让俄罗斯军队留在乌克兰领土上的谈判都将是普京下一次尝试之前的临时休战。</p>
          <p>作者强调，乌克兰战争归根结底是西方维护自由世界秩序的战争，也是为了保护这一秩序免受俄罗斯试图将其根除的攻击。</p>
          <p>弗里德曼在他的文章中用了大部分篇幅来赞扬和捍卫现有的自由主义世界秩序，并将其称为实现西方和“世界大多数人口”利益的制度。</p>
          <p>他认为，维护这种自由秩序是促使美国及其北约盟国帮助基辅抵御普京“入侵”的潜在逻辑。他指出，这是第二次世界大战结束以来欧洲国家对另一个邻国的首次攻击，本质上是针对自由秩序的。</p>
          <p>因此，弗里德曼认为，乌克兰战争将在第二年愈演愈烈。因为一方面是普京，另一方面是包括乌克兰在内的西方国家，它们都不准备做出让步，而且都坚持自己的立场。他表示，这将使这场战争可怕地升级。</p>
          <p>url:<?= $site4->url ?></p>
        </div>
      </div>
    </div>
  </body>
</html>