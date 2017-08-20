<?php

class Locations extends CActiveRecord
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'locations';
    }

    public function getLocations()
    {
//        $criteria = new CDbCriteria();
//        $criteria->select = 'name';
//        $locations = Locations::model()->findAll($criteria);

        $locations = [
            ['LOC_ID' => '1', 'SHORT_NAME' => 'Che', 'FULL_NAME' => 'Chernivtsy'],
            ['LOC_ID' => '2', 'SHORT_NAME' => 'Iva', 'FULL_NAME' => 'Ivano-Frankivsk'],
            ['LOC_ID' => '3', 'SHORT_NAME' => 'Dp', 'FULL_NAME' => 'Dnipro'],
            ['LOC_ID' => '4', 'SHORT_NAME' => 'Riv', 'FULL_NAME' => 'Rivne'],
            ['LOC_ID' => '5', 'SHORT_NAME' => 'Kyi', 'FULL_NAME' => 'Kyiv'],
            ['LOC_ID' => '6', 'SHORT_NAME' => 'Sof', 'FULL_NAME' => 'Sofia'],
            ['LOC_ID' => '7', 'SHORT_NAME' => 'Lv', 'FULL_NAME'=>'Lviv']
        ];

        return $locations;
    }
}
