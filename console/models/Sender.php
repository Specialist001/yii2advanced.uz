<?php
namespace console\models;

use Yii;

class Sender
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newList' => $newList,
            ])
                ->setFrom('specialist001@inbox.ru')
                ->setTo($subscriber['email'])
                ->setSubject('Theme')
                ->send();
            var_dump($result);
        }
    }
}