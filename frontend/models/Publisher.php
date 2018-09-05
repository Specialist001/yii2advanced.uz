<?php
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Publisher extends ActiveRecord
{
    public static function tableName()
    {
        return '{{publisher}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_registered' => 'Date Registered',
            'identity_number' => 'Identity Number',
        ];
    }

    public static function getList()
    {
        $list = self::find()->asArray()->all();

        return ArrayHelper::map($list, 'id', 'identity_number', 'name');
    }
}