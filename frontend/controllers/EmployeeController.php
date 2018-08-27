<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

use frontend\models\example\Animal;
use frontend\models\example\Human;

class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Pavel';
        $employee1->lastName = 'Gudini';
        $employee1->middleName = 'Vitalik';
        $employee1->salary = 1000;

        //echo $employee1['salary'];
        //print_r($employee1);
        //echo '<hr>';

        foreach ($employee1 as $attribute => $value)
        {
            echo  $value . "<br>";
            //return "attribute: $value <br>";
        }
        //var_dump();

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
    }

    public function actionTest()
    {
        $human1  = new Human();
        $animal1 = new Animal();

        $animal1->walk();
        echo '<br>';
        $human1->walk();
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }

        return $this->render('register',[
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->IsPost) {
            $model->attributes = $formData;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }

        return $this->render('update',[
            'model' => $model,
        ]);

    }
}