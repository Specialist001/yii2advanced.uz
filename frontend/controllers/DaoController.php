<?php
namespace frontend\controllers;

use yii\web\Controller;

class DaoController extends Controller
{
    public function actionIndex()
    {
        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced_db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]);

        $sql = 'SELECT * FROM city;';

        $command = new \yii\db\Command([
            'db'  => $db,
            'sql' => $sql,
        ]);

        $arrayWithResults = $command->queryAll();

        var_dump($arrayWithResults);
        //print_r($command);

        return $this->render('index');
        //die;
    }

    public function actionDemo()
    {
        echo 'bbb';
        return 'aaaa';
    }
}