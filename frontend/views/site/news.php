<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\news $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

?>


<html>
  <head>
    <title>News Page</title>
    <style>
      #news-list {
        list-style-type: none;
        margin: 0 auto;
        padding: 0;
        width: 50%;
        background-color: #f1f1f1;
        border: 1px solid black;
        text-align: center;
      }
      #news-list li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-bottom: 1px solid black;
      }
      #news-list li a:hover {
        background-color: #555;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center;">新闻列表</h1>
    <ul id="news-list">
      <li><a href="site1.php">以国前总理斡旋俄乌战争曾获普京承诺不会杀害泽连斯基</a></li>
      <li><a href="site2.php">担心"次级制裁" 中资银行回避对俄业务</a></li>
      <li><a href="site3.php">中国是否与俄罗斯做军火生意？海关记录说话</a></li>
      <li><a href="site4.php">乌克兰战争第二年将非常可怕</a></li>
      <li><a href="site5.php">战事正酣 防长换人？</a></li>
    </ul>
    <br><br><br><br><br><br><br><br><br><br>
  </body>
</html>
