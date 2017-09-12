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
                'approved_by' => $row->getRelated('expert')->name,
                'cv_url' => $row->cv_url,
            ];
        }

        return $result;
    }

    public function createStudent($data)
    {
        $student = new Student();
        //$student->setAttribute('group_id', $data['group_id']);
        $student->setAttribute('group_id', 1);
        $student->setAttribute('first_name', $data['first_name']);
        $student->setAttribute('last_name', $data['last_name']);
        //$student->setAttribute('english_lvl', $data['english_lvl']);
        $student->setAttribute('english_lvl', 1);
        $student->setAttribute('photo_url', $data['photo_url']);
        $student->setAttribute('incoming_test', $data['incoming_test']);
        $student->setAttribute('entry_score', $data['entry_score']);
        //$student->setAttribute('approved_by', $data['approved_by']);
        $student->setAttribute('approved_by', 1);
        $student->setAttribute('cv_url', $data['cv_url']);


        if ($data['cv_url']) {
            $student->cv_url = CUploadedFile::getInstance($student,'cv_url');
            $path = Yii::app()->request->baseUrl . '/users_cv/'.$student->cv_url->getName();
            $student->cv_url->saveAs($path);
        }

        if ($data['photo_url']) {
            $student->photo_url = CUploadedFile::getInstance($student,'photo_url');
            $path = Yii::app()->request->baseUrl . '/users_picture/'.$student->photo_url->getName();
            $student->photo_url->saveAs($path);
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

        $student->update();
    }

    public function deleteStudent($data)
    {
        $student_id = $data['id'];
        $model = new Student();

        $model->findByPk($student_id)->delete();;
    }
}
