<?php
namespace console\controllers;

use console\models\News;
use yii\console\Controller;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

class MailerController extends Controller
{
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);

        Console::output("\nEmails sent: {$count}");
    }
}