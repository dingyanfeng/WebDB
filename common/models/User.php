<?php

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * 用户模型
 *
 * @property string $account       身份证号
 * @property string $username      用户名
 * @property string $password_hash 加密存储的密码
 * @property string $password      登录时传入的密码，未加密
 * @property string $auth_key      认证信息
 * @property string $tel           联系方式
 * @property string $nationality   国籍
 * @property int $type          权限类别
 */
class User extends ActiveRecord implements IdentityInterface
{
    /*
     * @return 返回的是数据库中存储用户使用的表名
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%User}}';
    }

    /*
     * 通过身份证号寻找唯一的用户
     * 返回一个MyUser类
     */
    public static function findIdentity($account)
    {
        return static::findOne(['account' => $account]);
    }

    /*
     * 返回用户对象的主键
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /*
     * 传入参数为待验证密码
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /*
     * 未实现接口中的这个函数，不用管
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /*
     * 验证认证信息是否正确
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /*
     * 生成一个长度为32的验证信息string
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /*
     * 返回当前用户的认证信息
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /*
     * 设置密码
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /*
     * 设置用户名
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    // basic checkers
    private function checkAccount()
    {
        $len = strlen($this->account);
        if ($len != 18)
            return false;
        return true;
    }

    // 获取所有的居民
    // public function getResident()
    // {
    //     return $this->hasOne(Resident::className(), ['account' => 'account']);
    // }

    // 获取所有的职员
    // public function getCommittee()
    // {
    //     return $this->hasOne(Committee::className(), ['account' => 'account']);
    // }

    // public function getHealth()
    // {
    //     return $this->hasOne(Health::className(), ['account' => 'account']);
    // }

    // public function getTransactions()
    // {
    //     return $this->hasOne(Transactions::className(), ['account' => 'account']);
    // }

    // basic setters
    public function setAccount($account)
    {
        $this->account = $account;
    }

    // public function setName($name)
    // {
    //     $this->name = $name;
    // }


    public function setTel($tel)
    {
        $this->tel = $tel;
    }


    public function setType($type)
    {
        $this->type = $type;
    }

    // public function visitors(){
    //     $query = User::find()->where(['type' => 3])->all();
    //     return count($query);
    // }
}


