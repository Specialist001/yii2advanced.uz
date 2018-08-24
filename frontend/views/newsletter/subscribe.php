<?php

//if (Yii::$app->session->hasFlash('subscribeStatus')) {
//    echo Yii::$app->session->hasFlash('subscribeStatus');
//}

$this->title = 'Подпишитесь на новости!';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description for page'
]);

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br/><br/>
    <input type="submit" />
</form>