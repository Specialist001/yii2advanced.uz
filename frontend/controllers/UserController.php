<?php
namespace frontend\controllers;

use Yii;
use frontend\models\forms\SignupForm;

class UserController extends \yii\web\Controller
{
    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('seccess', 'User registered');
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
