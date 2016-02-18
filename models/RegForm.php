<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 10.01.16
 * Time: 12:09
 */

namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model {

    public $username;
    public $email;
    public $password;
    public $status;

    public function rules () {
        return [
            [['username', 'email', 'password'], 'filter', 'filter' => 'trim'],
            [['username', 'email', 'password'], 'required'],
            ['username', 'string', 'min' => 2, 'max' => '255'],
            ['password', 'string', 'min' => 2, 'max' => '255'],
            ['username', 'unique',
                'targetClass' => User::className(),
                'message' => 'Это имя уже занято',
            ],
            ['email', 'email'],
            ['email', 'unique',
                'targetClass' => User::className(),
                'message' => 'Эта почта уже занята',
            ],
            ['status', 'default', 'value' => User::STATUS_ACTIVE, 'on' => 'default'],
            ['status', 'in', 'range' =>[
                User::STATUS_NOT_ACTIVE,
                User::STATUS_ACTIVE
            ]],
            //['username', 'string', 'min' => 5, 'on' => 'test']
        ];
    }

    public function attributeLabels () {
        return [
            'username' => 'Имя пользователя',
            'email' => 'Эл.Почта',
            'password' => 'Пароль'
        ];
    }

    public function reg() {
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = $this->status;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}