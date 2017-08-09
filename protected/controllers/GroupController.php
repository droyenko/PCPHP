<?php

class GroupController
{
    public function actionCreateGroup()
    {

        $groupName = $_POST['groupName'];
        $direction = $_POST['direction'];
        $location = $_POST['location'];
        $teachers = $_POST['teachers'];
        $budgetOwner = $_POST['budgetOwner'];
        $startDate = $_POST['startDate'];
        $finishDate = $_POST('finishDate');
        $expert = $_POST['expert'];

        $newGroup = new Group($groupName, $direction, $location, $teachers, $budgetOwner, $startDate,
                $finishDate, $expert);

        if ($newGroup->validate()) {
            $attributesGroup = $newGroup->getAttributesGroup();

            Yii::app()->db->createCommand()
                ->insert('db_groups',
                    [
                        'name'=>$attributesGroup['groupName'],
                        'direction'=>$attributesGroup['direction'],
                        'location'=>$attributesGroup['location'],
                        'teachers'=>$attributesGroup['teachers'],
                        'budgetOwner'=>$attributesGroup['budgetOwner'],
                        'startDate'=>$attributesGroup['startDate'],
                        'finishDate'=>$attributesGroup['finishDate'],
                        'expert'=>$attributesGroup['expert']
                    ])->execute();
        }
    }

    public function actionDeleteGroup()
    {
        Yii::app()->db->createCommand()
            ->delete('db_groups', 'id=:id', [':id'=>$_GET['id']])
            ->execute();
    }

    public function actionGiveTeachersToSelect()
    {
        $treachers = Yii::app()->db->createCommand()
            ->select('name')
            ->from('teachers_list')
            ->queryAll();
        
       // $this->_sendResponse(200, CJSON::encode($teachers));
    }
    
    public function actionGiveLocationsToSelect()
    {
        $locations = Yii::app()->db->createCommand()
            ->select('name')
            ->from('locations_list')
            ->queryAll();
        
      //  $this->_sendResponse(200, CJSON::encode($locations));
    }

    public function actionGiveDirectionsToSelect()
    {
        $directions = Yii::app()->db->createCommand()
            ->select('name')
            ->from('directions_list')
            ->queryAll();

       // $this->_sendResponse(200, CJSON::encode($locations));
    }

}

