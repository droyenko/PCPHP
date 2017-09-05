<?php

class DemoDataCommand extends CConsoleCommand
{
    public function actionFillOutAllTables()
    {
        $this->actionFillOutTableLocations('locations');
        $this->actionFillOutTableUsers('users');
        $this->actionFillOutTableDirections('directions');
        $this->actionFillOutTableGroups('groups');
        $this->actionFillOutTableUserGroups('user_groups');
        $this->actionFillOutTableUserRoles('user_roles');
        $this->actionFillOutTableExperts('experts');
        $this->actionFillOutTableStudents('students');
    }

    private function getDemoData($fileName)
    {
        return require_once Yii::app()->basePath . '/data/demo/' . $fileName;
    }

    private function fillOutTable($tableName)
    {
        $fileName = $tableName . '.php';
        $demoData = $this->getDemoData($fileName);
        $command = Yii::app()->db->createCommand();
        foreach ($demoData as $columnsArr) {
            $command->insert($tableName, $columnsArr);
        }
    }

    public function actionFillOutTableLocations($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableUsers($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableDirections($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableGroups($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableUserGroups($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableUserRoles($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableExperts($tableName)
    {
        $this->fillOutTable($tableName);
    }

    public function actionFillOutTableStudents($tableName)
    {
        $this->fillOutTable($tableName);
    }
}
