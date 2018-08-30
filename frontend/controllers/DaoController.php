<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;

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

        $array2 = Yii::$app->db->CreateCommand($sql)->queryAll();

       //var_dump($arrayWithResults);
        //echo '<hr>';
        //var_dump($array2);
        //print_r($command);

        return $this->render('index');
        //die;
    }
}