<?php
namespace console\controllers;

use Yii;
use console\models\News;
use yii\console\Controller;
use console\models\Subscriber;
use console\models\Sender;

class MailerController extends Controller
{
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $result = Sender::run($subscribers, $newsList);

    }
}