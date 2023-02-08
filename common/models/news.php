<?php

/*
 * Team：EW_WAR
 * Coding By：程佳诺
 * 新闻部分和数据库的连接查询
*/

namespace common\models;


use yii\db\ActiveRecord;


class news extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setauthor($author)
    {
        $this->author = $author;
    }

    public function setrelease_date($release_date)
    {
        $this->release_date = $release_date;
    }

    public function settitle($title)
    {
        $this->title = $title;
    }


    public function seturl($url)
    {
        $this->url = $url;
    }
}