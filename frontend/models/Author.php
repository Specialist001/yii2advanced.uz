<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return '{{author}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name'  => 'Last Name',
            'birthdate'  => 'Birthdate',
            'rating'     => 'Rating',
        ];
    }

    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 25],
            [['birthdate'], 'date', 'format' => 'php:Y-m-d'],
            [['rating'], 'integer'],
        ];
    }
}