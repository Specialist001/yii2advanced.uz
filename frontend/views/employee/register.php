<?php
/* @var \frontend\models\Employee */

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