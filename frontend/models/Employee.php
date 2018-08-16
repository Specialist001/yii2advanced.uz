<?php
namespace frontend\models;

use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE   = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName','lastName', 'middleName', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE   => ['firstName','lastName', 'middleName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'middleName'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
        ];
    }
}