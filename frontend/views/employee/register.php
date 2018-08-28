<?php
/* @var \frontend\models\Employee */

use yii\helpers\Html;

use yii\widgets\ActiveForm;

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Welcome</h1>

<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'firstName'); ?>
    <?php echo $form->field($model, 'lastName'); ?>
    <?php echo $form->field($model, 'middleName')->passwordInput(); ?>
    <?php echo $form->field($model, 'email')->hint('Help me'); ?>
    <?php echo $form->field($model, 'birthDate'); ?>
    <?php echo $form->field($model, 'hiringDate'); ?>
    <?php echo $form->field($model, 'position'); ?>
    <?php echo $form->field($model, 'idCode'); ?>
    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

    <?php echo Html::submitButton('Send', ['class'=>'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>

<!--<form method="post">
    <p>First name:</p>
    <input type="text" name="firstName" />
    <br/>

    <p>Last name:</p>
    <input type="text" name="lastName" />
    <br/>

    <p>Middle name:</p>
    <input type="text" name="middleName" />
    <br/>

    <p>E-mail:</p>
    <input type="text" name="email" />
    <br/>

    <input type="submit" />

</form>-->