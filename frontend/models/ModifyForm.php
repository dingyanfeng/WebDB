<?php

/*
 * Team：EW_WAR
 * Coding By：黄逸轩
*/


namespace frontend\models;


use common\models\User;
use phpDocumentor\Reflection\Types\This;
use yii\base\Model;

class ModifyForm extends Model
{
    public $newpassword;
    public $newusername;
    public $account;
    public $password;
    public $user;
    public $tel;

    /*
     * 表单验证规则，修改的account必须已经存在，并且密码正确
     * 密码和用户名规则仍然同以前一样
     */
    public function rules()
    {
        return [
            ['account', 'trim'],
            ['account', 'required', 'message' => '账户不能为空'],
            ['account', 'string', 'min' => 18, 'max' => 18, 'tooShort' => '账户应为18位身份证号', 'tooLong' => '账户应为18位身份证号'],

            ['newusername', 'trim'],
            ['newusername', 'required', 'message' => '新用户名不能为空'],
            ['newusername', 'string', 'min' => 1, 'max' => 20, 'tooShort' => '用户名的长度必须在1到10之间', 'tooLong' => '用户名的长度必须在1到10之间'],

            ['password', 'required', 'message' => '密码不能为空'],
            ['password', 'string'],

            ['newpassword', 'required', 'message' => '新密码不能为空'],
            ['newpassword', 'string', 'min' => 4, 'tooShort' => "密码长度必须大于等于4位"],

            ['tel', 'required', 'message' => '联系方式不能为空'],
            ['tel', 'number', 'min' => 10000000000, 'max' => 19999999999, 'message' => "请填写正确的联系方式", 'tooBig'=>"请填写正确的联系方式",'tooSmall'=>"请填写正确的联系方式" ],

        ];
    }

    /*
     * 设置修改的用户，在修改时必须调用
     * 如果验证合法，返回true，否则返回false
     * @return bool
     */
    public function setMyUser()
    {
        $this->user = User::findIdentity($this->account);
        //未找到对应的用户或者密码不正确
        return $this->user != null && $this->user->validatePassword($this->password);
    }

    /*
     * 存储新的用户信息
     */
    public function setInfo()
    {
        $this->user->setPassword($this->newpassword);
        $this->user->setUsername($this->newusername);
        $this->user->setTel($this->tel);
        $this->user->generateAuthKey();
        $this->user->save();
    }

}