<?php

class GroupController extends BaseController
{
    public function actionCreateGroup()
    {
        $createFormAttributes = Yii::app()->request->getPost('CreateForm', []);

        if (empty($createFormAttributes)) {
            throw new CHttpException(400, 'Invalid data');
        }

        $newGroup = new GroupForm();
        $newGroup->attributes = $createFormAttributes;

        if (!$newGroup->validate()) {
            throw new CHttpException(400,'error in request');
        }

        $attributesGroup = $newGroup->getAttributes();

        Yii::app()->db->createCommand()
            ->insert('db_groups',
                [
                    'name'=>$attributesGroup['groupName'],
                    'direction'=>$attributesGroup['direction'],
                    'location'=>$attributesGroup['location'],
                    'teachers'=>$attributesGroup['teachers'],
                    'budget_owner'=>$attributesGroup['budgetOwner'],
                    'date_start'=>$attributesGroup['startDate'],
                    'date_finish'=>$attributesGroup['finishDate'],
                    'expert'=>$attributesGroup['expert']
                ])->execute();

        $this->renderJSON(["success" => true]);
    }

    public function actionDeleteGroup()
    {
        Yii::app()->db->createCommand()
            ->delete('tbl_group', 'id_group=:id', [':id'=>Yii::app()->request->getParam('id')])
            ->execute();

        $this->renderJSON(["success" => true]);
    }

    public function actionGiveTeachersToSelect()
    {
        $teachers = Yii::app()->db->createCommand()
            ->select('name')
            ->from('tbl_user')
            ->queryAll();

        $this->renderJSON($teachers);
    }

    public function actionGiveLocationsToSelect()
    {
        $locations = Yii::app()->db->createCommand()
            ->select('name')
            ->from('tbl_location')
            ->queryAll();

        $this->renderJSON($locations);
    }

    public function actionGiveDirectionsToSelect()
    {
        $directions = Yii::app()->db->createCommand()
            ->select('name')
            ->from('tbl_direction')
            ->queryAll();

        $this->renderJSON($directions);
    }
}