<?php
namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

class EmailService extends Component
{
    public function notifyUser($event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }

    public function notifyAdmins($event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo('darking-uz@yandex.com')
            ->setSubject($event->getSubject())
            ->send();
    }
}