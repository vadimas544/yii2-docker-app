<?php
/*
 * @var $model forntend\models\Subscribe
 */

if(Yii::$app->session->hasFlash('subscriber')){
    echo Yii::$app->session->getFlash('subscriber');
}

if($model->hasErrors()){
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>
<form action="" method="post">
    <p>Email</p>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Send">
</form>