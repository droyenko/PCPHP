<?php

/**
 * The followings are the available columns in table '{{students}':
 * @var integer $id
 * @var string $first_name
 * @var string $last_name
 * @var string $photo_url
 * @var integer $english_lvl
 * @var integer $group_id
 * @var integer $incoming_test
 * @var integer $entry_score
 * @var integer $aproved_by
 */
class Student extends CActiveRecord
{
    public $id;
    public $first_name;
    public $last_name;
    public $photo_url;
    public $english_lvl;
    public $group_id;
    public $incoming_test;
    public $entry_score;
    public $approved_by;
    public $cv_url;
    public $teacher_feedback_id;
    public $expert_feedback_id;
    public $interviewer_feedback_id;

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'students';
    }

    public function relations()
    {
        return [
            'english' => [self::BELONGS_TO, 'English', 'english_lvl'],
            'group' => [self::BELONGS_TO, 'Group', 'group_id'],
            'expert' => [self::BELONGS_TO, 'Expert', 'approved_by'],
            'teacherFeedback' => [self::BELONGS_TO, 'TeacherFeedbackForm', 'teacher_feedback_id'],
            'expertFeedback' => [self::BELONGS_TO, 'ExpertFeedbackForm', 'expert_feedback_id'],
            'interviewerFeedback' => [self::BELONGS_TO, 'InterviewerFeedbackForm', 'interviewer_feedback_id'],
        ];
    }

    public function rules()
    {
        return [
            ['first_name', 'length', 'min' => 2, 'max' => 20],
            ['last_name', 'length', 'min' => 2, 'max' => 20],
            ['cv_url', 'file', 'types'=>'txt, doc, docx'],
            ['photo_url', 'file', 'types'=>'jpg, png'],
        ];
    }
}
