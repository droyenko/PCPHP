<?php


class StudentController extends CController
{
    public function actionCreate(array $data)
    {
        $component = Yii::app()->getComponent('Student');
        $component->createStudent($data);
    }

    public function actionEdit(array $data)
    {
        $component = Yii::app()->getComponent('Student');
        $component->editStudent($data);
    }
}