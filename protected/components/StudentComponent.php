<?php

class StudentComponent extends CApplicationComponent
{
    public function getStudentList($group_id)
    {
        $criteria = new CDbCriteria();
        $criteria->alias = 'students';
        $criteria->condition = "$group_id = {$criteria->alias}.group_id";
        $rows = Student::model()->with('english')->findAll($criteria);
        $result = [];
        if (empty($rows)) {
            return $result;
        }
        foreach ($rows as $row) {
            $result[] = [
                'id' => $row->id,
                'first_name' => $row->first_name,
                'last_name' => $row->last_name,
                'photo_url' => $row->photo_url,
                'english_lvl' => $row->getRelated('english')->name,
                'incoming_test' => $row->incoming_test,
                'entry_score' => $row->entry_score,
                'approved_by' => $row->approved_by,
            ];
        }

        return $result;
    }

    public function createStudent(array $data)
    {
        $student = new Student();
        $student->setAttribute('group_id', $data['group_id']);
        $student->setAttribute('first_name', $data['first_name']);
        $student->setAttribute('last_name', $data['last_name']);
        $student->setAttribute('english_lvl', $data['english_lvl']);
        $student->setAttribute('photo_url', $data['photo_url']);
        $student->setAttribute('incoming_test', $data['incoming_test']);
        $student->setAttribute('entry_score', $data['entry_score']);
        $student->setAttribute('approved_by', $data['approved_by']);
        $student->setAttribute('cv_url', $data['cv_url']);

        if (!$student->validate()) {
            throw new CHttpException(400, 'Invalid data');
        }

        $student->save();
    }

    public function editStudent($data)
    {
        $student_id = $data['id'];
        $model = new Student();
        $student = $model->findByPk($student_id);

        $student->setAttribute('group_id', $data['group_id']);
        $student->setAttribute('first_name', $data['first_name']);
        $student->setAttribute('last_name', $data['last_name']);
        $student->setAttribute('english_lvl', $data['english_lvl']);
        $student->setAttribute('photo_url', $data['photo_url']);
        $student->setAttribute('incoming_test', $data['incoming_test']);
        $student->setAttribute('entry_score', $data['entry_score']);
        $student->setAttribute('approved_by', $data['approved_by']);
        $student->setAttribute('cv_url', $data['cv_url']);

        if (!$student->validate()) {
            throw new CHttpException(400, 'Invalid data');
        }

        $student->update();
    }
}
