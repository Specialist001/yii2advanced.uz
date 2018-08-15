<?php
namespace frontend\models;

use yii\base\Model;

class Subscribe extends Model
{
    public $email;

    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }
}