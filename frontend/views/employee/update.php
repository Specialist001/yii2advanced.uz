<?php
/* @var \frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<h1>Update profile</h1>

<form method="post">
    <p>First name:</p>
    <input type="text" name="firstName" />
    <br/>

    <p>Last name:</p>
    <input type="text" name="lastName" />
    <br/>

    <p>Middle name:</p>
    <input type="text" name="middleName" />
    <br/>

    <input type="submit" />
</form>