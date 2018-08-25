<?php

use yii\helpers\Html;

echo Html::tag('h3', 'Lorem ipsum');

$array = [
    '1' => 'Moscow',
    '2' => 'Paris',
    '3' => 'Rome',
    '4' => 'Beijing',
];

echo Html::dropDownList('drop_id', [], $array);
echo Html::radioList('drop_id', [], $array);
echo Html::checkboxList('drop_id', [], $array);