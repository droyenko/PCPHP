<?php

class GroupsListController extends BaseController
{
    public function actionGetGroupsList()
    {
        $groupsList = GroupsList::model()->getGroupsList();
        $this->renderJSON($groupsList);
    }
}
