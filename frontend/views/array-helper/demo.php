<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode('<br/>', $emails);

echo '<hr/>';

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
];

$listData = ArrayHelper::map($employees, 'first_name', 'hiring_date');

echo '<pre>';
//print_r($listData);
echo '<pre>';

echo Html::dropDownList('city', [], $listData);