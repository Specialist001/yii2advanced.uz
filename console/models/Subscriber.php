<?php
namespace console\models;

use Yii;

class Subscriber
{
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->CreateCommand($sql)->queryAll();
    }
}