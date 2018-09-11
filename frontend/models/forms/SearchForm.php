<?php
namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\NewsSearch;

class SearchForm extends Model
{

    public $keyword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3],
        ];
    }

    public function search()
    {
        if ($this->validate()) {
            $model = new NewsSearch();

            return $model->fulltextSearch($this->keyword);
        }
    }
}
