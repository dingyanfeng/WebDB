<?php

/**
 * EW_WAR
 * 丁延峰
*/

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * 团队成员模型
 * @property int    $account          用户
 * @property string $in_id            所处团队
 * @property string $student_id       学生编号
 * @property string $git_link         git链接
 * @property bool   $captain          是否队长
 * @property string $pic_link         头像链接
 * @property string $name             学生姓名
 */
class TeamMember extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%Teammember}}';
    }

    /**
     * set 方法整合
     *
     * @param {$value} - 要设置的参数
     */
    public function setStudent_id($student_id)
    {
        $this->student_id = $student_id;
    }

    public function setGit_link($git_link)
    {
        $this->git_link = $git_link;
    }

    // public function setInfo($info)
    // {
    //     $this->info = $info;
    // }

    public function setAccount($account)
    {
        $this->account = $account;
    }
    public function setCaptain($captain)
    {
        $this->captain = $captain;
    }
    public function setPic_link($pic_link)
    {
        $this->pic_link = $pic_link;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * get 方法整合
     */
    public function getAccount()
    {
        return $this->account;
    }
    public function getStudent_id()
    {
        return $this->student_id;
    }

    public function getGit_link()
    {
        return $this->git_link;
    }

    // public function getInfo()
    // {
    //     return $this->info;
    // }

    public function getCaptain()
    {
        return $this->captain;
    }

    public function getPic_link()
    {
        return $this->pic_link;
    }

    public function getName()
    {
        return $this->name;
    }

    // 联表查询 User x TeamMember
    public function getUser() {
        return $this->hasOne(User::className(), ['account' => 'account']);
    }

    /**
     * @param $account
     * @return bool
     */
    public static function isMember($account)
    {
        return static::findOne(['account' => $account])!=null;
    }
}