<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class DaoController extends Controller
{
    public function actionIndex()
    {
        $sql1 = 'INSERT INTO news (title, content, status) VALUES ("title 7", "content 7", 1);';
        $result1 = Yii::$app->db->createCommand($sql1)->execute();
        echo '<pre>';
        var_dump($result1);
        echo '<pre>';die;

        return $this->render('index');
    }
}