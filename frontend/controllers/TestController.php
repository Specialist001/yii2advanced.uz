<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('specialist001@inbox.ru')
            ->setTo('yii2advanced@mail.ru')
            ->setSubject('Theme')
            ->setTextBody('Msg')
            ->setHtmlBody('<html><body style="background:#f00"><h2 style="color:#00f">Lorem</h2></body></html>')
            ->send();
    }
}