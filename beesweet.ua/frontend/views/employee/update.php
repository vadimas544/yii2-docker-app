<?php

if(Yii::$app->session->hasFlash('success')){
    echo Yii::$app->session->getFlash('success');
}

if($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Update your profile details</h1>

<form action="" method="post">
    <p>First name:</p>
    <input type="text" name="firstName">
    <br><br>
    <p>Last name:</p>
    <input type="text" name="lastName">
    <br><br>
    <p>Middle name:</p>
    <input type="text" name="middleName">
    <br><br>

    <input type="submit" value="Update">
</form>