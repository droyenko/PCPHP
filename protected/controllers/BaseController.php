<?php

abstract class BaseController extends CController
{
    public function renderJSON($data)
    {
        header('Content-type: application/json');
        echo CJSON::encode($data);
    }
}