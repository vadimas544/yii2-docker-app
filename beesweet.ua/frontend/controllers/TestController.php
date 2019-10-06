<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {

        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);

        return $this->render('index', [
            'list' => $list
        ]);
    }

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('vadim123544@gmail.com')
            ->setTo('vadim_rt51@ukr.net')
            ->setSubject('Subject of mail')
            ->setTextBody('Text mail')
            ->setHtmlBody('<b>text in html format</b>')
            ->send();

        var_dump($result);
        die;
    }
}