<?php

class AbstactController extends CController
{
    public function renderJSON($data)
    {
        header('Content-type" application/json');
        echo CJSON::encode($data);
    }
}