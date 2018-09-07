<?php
namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    public function notifyUser(UserNotificationInterface $user)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo($user->email)
            ->setSubject()
            ->send();
    }

    public function notifyAdmins($subject)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo('specialist001@inbox.ru')
            ->setSubject()
            ->send();
    }
}