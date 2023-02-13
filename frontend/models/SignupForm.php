<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $account;
    public $password;
    public $username;
    public $tel;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account', 'name', 'tel'], 'trim'],
            ['account', 'required', 'message' => '账户不能为空'],
            ['account', 'unique', 'targetClass' => '\common\models\User', 'message' => '账户已存在'],
            ['account', 'string', 'min' => 18, 'max' => 18, 'tooShort' => '账户应为18位身份证号', 'tooLong' => '账户应为18位身份证号'],

            ['username', 'trim'],
            ['username', 'required', 'message' => '用户名不能为空'],
            ['username', 'string', 'min' => 1, 'max' => 10, 'tooShort' => '用户名的长度必须在1到10之间', 'tooLong' => '用户名的长度必须在1到10之间'],

            ['password', 'required', 'message' => '密码不能为空'],
            ['password', 'string', 'min' => 4, 'tooShort' => "密码长度必须大于等于4位"],

            ['tel', 'required', 'message' => '联系方式不能为空'],
            ['tel', 'number', 'min' => 10000000000, 'max' => 19999999999, 'message' => "请填写正确的联系方式", 'tooBig'=>"请填写正确的联系方式",'tooSmall'=>"请填写正确的联系方式" ],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        // if (!$this->validate()) {
        //     return null;
        // }
        
        $user = new User();
        $user->account = $this->account;
        $user->setPassword($this->password);
        $user->setUsername($this->username);
        $user->setTel($this->tel);
        $user->setType(0);
        $user->generateAuthKey();
        
        return $user->save();
    }
}
