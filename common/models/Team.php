<?php

/**
 * EW_WAR
 * 丁延峰
*/

namespace common\models;


use yii\db\ActiveRecord;

/**
 * 团队相关数据，用于在前台显示
 * @property int $id             团队id
 * @property string $name        团队名称
 * @property string $introduct    团队简介
 * @property int $meNum         成员数
 */
class Team extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%Team}}';
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    // public function setGitcnt($gitCnt)
    // {
    //     $this->gitCnt = $gitCnt;
    // }

    // public function setDays($days)
    // {
    //     $this->days = $days;
    // }

    // public function setFiles($files)
    // {
    //     $this->files = $files;
    // }



}