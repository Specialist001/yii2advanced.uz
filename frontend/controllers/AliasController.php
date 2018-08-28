<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasController extends Controller
{
    public function actionExample()
    {
        for ($i = 2; $i<10; $i++) {
            $result = rmdir(Yii::getAlias('@files') . '/test'.$i);
            //var_dump($result);
        }
    }
}