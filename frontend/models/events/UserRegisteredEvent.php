<?php
namespace frontend\models\events;

use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;

class UserRegisteredEvent extends Event
{
    /**
     * @var User
     */
    public $user;

    /**
     * @var string
     */
    public $subject;

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->user->email;
    }
}