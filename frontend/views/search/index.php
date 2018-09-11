<?php
/* @var $model frontend\models\forms\SearchForm */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;

?>
<h3>Search</h3>
<div class="row">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin(); ?>

            <?php echo $form->field($model, 'keyword'); ?>

            <?php echo Html::submitButton('Search', ['class'=>'btn btn-primary']); ?>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <?php if ($results): ?>
            <?php foreach ($results as $item): ?>
                <?php echo 'ID:' . $item['id']; ?>
                <br>
                <?php echo $item['title']; ?>
                <br>
                <?php echo HighlightHelper::process($model->keyword, $item['content']); ?>
                <hr>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>