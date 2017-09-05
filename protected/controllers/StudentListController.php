<?php

class StudentListController extends CController
{
    public function actionRenderEditModalScore($group_id)
    {
        /** @var StudentComponent $component */
        $component = Yii::app()->getComponent('Student');
        $rawData = $component->getStudentList($group_id);


        $studentList = [];
        foreach ($rawData as $student) {
            $studentList[] = [
                'id' => $student['id'],
                'name' => $student['first_name'],
                'surname' => $student['last_name'],
                'photo_url' => $student['photo_url'],
                'incoming_test' => $student['incoming_test'],
                'entry_score' => $student['entry_score'],
                'approved_by' => $student['approved_by'],
            ];
        }

        $dataArray = [
            'groupName' => Yii::app()->user->groupName,
            'groupDirection' => Yii::app()->user->groupDirection,
            'studentList' => $studentList
            ];
        $this->renderPartial('studentScore', $dataArray);
    }
}
