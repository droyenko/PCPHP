<?php

abstract class BaseController extends CController
{
    protected function renderJSON($data)
    {
        header('Content-type: application/json');
        echo CJSON::encode($data);
        Yii::app()->Application->end();      
    }
}