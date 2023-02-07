<?php

/**
 * EW_WAR
 * 丁延峰
*/

namespace common\models;


use yii\db\ActiveRecord;

/**
 * 团队相关数据，用于在前台显示
 * @property string $nationality    国籍
 * @property string $destination    去向
 * @property string $num            过境人数
 */
class Refugee extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%Refugee}}';
    }

    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function getNationality()
    {
        return $this->nationality;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function getNum()
    {
        return $this->num;
    }
}