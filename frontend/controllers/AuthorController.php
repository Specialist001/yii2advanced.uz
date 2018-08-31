<?php
namespace frontend\controllers;

use frontend\models\Author;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $authorsList = Author::find()->all();

        return $this->render('index', [
            'authorsList' => $authorsList,
        ]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
