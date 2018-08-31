<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Book;
use yii\web\Controller;

class BookshopController extends Controller
{
    public function actionIndex()
    {
        $book = new Book();
//        $book->name = 'Test Book';
//        $book->isbn = '111111111';
        $book->save();

        //echo '<pre>';
        print_r($book->getErrors());
        //echo '<pre>';

        return $this->render('index');
    }

    public function actionCreate()
    {
        $book = new Book();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');

            return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
        ]);
    }

}
