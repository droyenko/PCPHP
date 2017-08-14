<?php

class GroupController extends AbstactController
{
    public function actionCreateGroup()
    {
        $newGroup = new GroupForm();
        $createGroupPost = Yii::app()->request->getPost('CreateForm');

        if (isset($createGroupPost)) {
            $newGroup->attributes = $createGroupPost;

            if (!$newGroup->validate()) {
                throw new CHttpException(404,'error in request');
            }

            $attributesGroup = $newGroup->getAttributes();

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

            echo true;
        }
    }

    public function actionDeleteGroup()
    {
        Yii::app()->db->createCommand()
            ->delete('db_groups', 'id=:id', [':id'=>Yii::app()->request->getParam('id')])
            ->execute();

        echo true;
    }

    public function actionGiveTeachersToSelect()
    {
        $teachers = Yii::app()->db->createCommand()
            ->select('name')
            ->from('db_teachers')
            ->queryAll();

        $this->renderJSON($teachers);
    }

    public function actionGiveLocationsToSelect()
    {
        $locations = Yii::app()->db->createCommand()
            ->select('name')
            ->from('db_locations')
            ->queryAll();

        $this->renderJSON($locations);
    }

    public function actionGiveDirectionsToSelect()
    {
        $directions = Yii::app()->db->createCommand()
            ->select('name')
            ->from('db_directions')
            ->queryAll();

        $this->renderJSON($directions);
    }
}