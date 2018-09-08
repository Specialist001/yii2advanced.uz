<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\User;

class TestController extends Controller
{
    public function actionIndex()
    {
        $user = new User();

        echo 'test<br>';
    }

}