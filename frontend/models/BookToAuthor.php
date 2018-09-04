<?php
namespace frontend\models;

use yii\db\ActiveRecord;

class BookToAuthor extends ActiveRecord
{
    public static function tableName()
    {
        return '{{book_to_author}}';
    }
}