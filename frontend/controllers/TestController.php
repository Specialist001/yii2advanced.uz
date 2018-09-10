<?php
namespace frontend\controllers;

use Faker\Factory;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\ExampleValidation;

class TestController extends Controller
{
    public function actionGenerate()
    {
        $faker = Factory::create();

        echo $faker->name;
        echo '<hr>';
        echo $faker->address;
        echo '<hr>';
        echo $faker->text;
        echo '<br>';
        die('stop');
    }
}