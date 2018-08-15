<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{
    public function actionSubscribe()
    {
        $formData = Yii::$app->request->post();
        $model = new Subscribe();

        if (Yii::$app->request->isPost) {
            $model->email = $formData['email'];
            echo '<pre>';
            print_r($model);
            echo '<pre>';

            var_dump($model->validate());
            $error = $model->getErrors();

            echo '<pre>';
            print_r($error);
            echo '<pre>';
            die;
        }

        return $this->render('subscribe');
    }
}