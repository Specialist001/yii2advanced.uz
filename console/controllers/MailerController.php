<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class MailerController extends Controller
{
    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo('yii2advanced@mail.ru')
            ->setSubject('Theme')
            ->setTextBody('Msg')
            ->setHtmlBody('<h2 style="color:#00f">Lorem</h2>')
            ->send();
    }
}