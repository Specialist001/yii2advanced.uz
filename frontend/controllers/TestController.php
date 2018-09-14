<?php
namespace frontend\controllers;

use Yii;
use Faker\Factory;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionGenerate()
    {
        $faker = Factory::create();

        for ($j=0; $j<5; $j++) {
            $news = [];
            for ($i=0; $i<5; $i++) {
                $news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0,1)];
            }

            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
        }
            die('stop');
    }
}