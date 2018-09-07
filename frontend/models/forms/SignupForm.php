<?php
namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;
use common\components\EmailService;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::className()],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function save()
    {
        if ($this->validate()) {
            $user = new User();
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            if ($user->save()) {

                Yii::$app->emailService->notifyUser($user);
                Yii::$app->emailService->notifyAdmins('User registered');
                Yii::$app->smsService->notifyUser($user);
                Yii::$app->smsService->notifyAdmins('User registered');
                Yii::$app->smsService->notifyHeadquerters('User registered');
                Yii::$app->postService->sendGift($user);

                return $user;
            }
        }

        return false;
    }
}