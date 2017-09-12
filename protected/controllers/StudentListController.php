<?php

class StudentListController extends CController
{
    public function actionEditEnglish()
    {
        $cache = Yii::app()->cache;
        /** @var StudentComponent $component */
        $component = Yii::app()->getComponent('Student');
        $rawStudentList = $component->getStudentList($cache['groupId']);
        $studentList = [];
        foreach ($rawStudentList as $student) {
            $studentList[] = [
                'id' => $student['id'],
                'first_name' => $student['first_name'],
                'last_name' => $student['last_name'],
                'photo_url' => $student['photo_url'],
                'english_lvl' => $student['english_lvl'],
                'cv_url' => $student['cv_url'],
            ];
        }

        $dataArray = [
            'groupName' => $cache['groupName'],
            'groupDirection' => $cache['groupDirection'],
            'studentList' => $studentList
        ];
        $this->renderPartial('editEnglish', $dataArray, false, true);
    }

    public function actionEditScore()
    {
        $cache = Yii::app()->cache;
        /** @var StudentComponent $component */
        $component = Yii::app()->getComponent('Student');
        $rawStudentList = $component->getStudentList($cache['groupId']);
        $studentList = [];
        foreach ($rawStudentList as $student) {
            $studentList[] = [
                'id' => $student['id'],
                'first_name' => $student['first_name'],
                'last_name' => $student['last_name'],
                'photo_url' => $student['photo_url'],
                'incoming_test' => $student['incoming_test'],
                'entry_score' => $student['entry_score'],
                'approved_by' => $student['approved_by'],
            ];
        }

        $dataArray = [
            'groupName' => $cache['groupName'],
            'groupDirection' => $cache['groupDirection'],
            'studentList' => $studentList
        ];
        $this->renderPartial('editScore', $dataArray, false, true);
    }

    public function actionEnglishTable($groupid)
    {
        /** @var StudentComponent $component */
        $component = Yii::app()->getComponent('Student');
        $rawData = $component->getStudentList($groupid);
        $sort = new CSort();
        $sort->defaultOrder = ['Name' => CSort::SORT_DESC];
        $sort->attributes = ['first_name', 'english_lvl'];

        $arrayDataProvider = new CArrayDataProvider($rawData, [
            'id' => 'id',
            'sort' => $sort,
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);
        $params = [
            'arrayDataProvider' => $arrayDataProvider,
        ];
        $this->renderPartial('//site/groupArea/studentList', $params, false, true);
        Yii::app()->end();
    }

    public function actionScoreTable($group_id)
    {
        /** @var StudentComponent $component */
        $rawData = Yii::app()->getComponent('Student')->getStudentList($group_id);
        $sort = new CSort();
        $sort->defaultOrder = ['Name' => CSort::SORT_DESC];
        $sort->attributes = ['first_name', 'incoming_test', 'entry_score', 'approved_by'];

        $arrayDataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'id',
            'sort' => $sort,
            'pagination' => array(
                'pageSize' => 4,
            ),
        ));
        $params = array(
            'arrayDataProvider' => $arrayDataProvider,
        );
        $this->renderPartial('../site/studentScore', $params, false, true);
    }

    public function actionAttachmentTable($group_id)
    {
        /** @var StudentComponent $component */
        $rawData = Yii::app()->getComponent('Student')->getStudentList($group_id);
        $arrayDataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'id',
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        $params = array(
            'arrayDataProvider' => $arrayDataProvider,
        );
        $this->renderPartial('../site/studentAttachment', $params, false, true);
    }
}
