<?php
namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller
{
    public function actionDemo()
    {
        return $this->render('demo');
    }

    public function actionEscapeOutput()
    {
        $comments = [
            [
                'id' => 10,
                'author' => 'Student 10',
                'text' => 'Hello!',
            ],
            [
                'id' => 11,
                'author' => 'Student 11',
                'text' => 'Hello! How are you?',
            ],
            [
                'id' => 12,
                'author' => 'Student 11',
                'text' => '<b>Hello!</b><script>alert("How are you?")</script>',
            ],
        ];

        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }
}