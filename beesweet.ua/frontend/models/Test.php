<?php

namespace frontend\models;

use frontend\components\StringHelper;
use Yii;

class Test
{
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max;


        $result = Yii::$app->db->createCommand($sql)->queryAll();

//        $helper = new StringHelper();

        $helper = Yii::$app->stringHelper;
        if(!empty($result) && is_array($result)){
            foreach ($result as &$item){
                $item['content'] = $helper->getShort($item['content']);
            }
            return $result;
        }

    }
}