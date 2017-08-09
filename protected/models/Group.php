<?php

class Group extends CActiveRecord
{
    private $groupName;
    private $direction;
    private $location;
    private $teachers;
    private $budgetOwner;
    private $startDate;
    private $finishDate;
    private $expert;

    public function __construct($groupName, $direction, $location, $teachers, $budgetOwner, $startDate, $finishDate,
                                $expert)
    {
        $this->groupName = $groupName;
        $this->direction = $direction;
        $this->location = $location;
        $this->teachers = $teachers;
        $this->budgetOwner = $budgetOwner;
        $this->startDate = $startDate;
        $this->finishDate = $finishDate;
        $this->expert = $expert;
    }

    public function getAttributesGroup()
    {
        return [
            'groupName'=>$this->groupName, 
            'direction'=>$this->direction, 
            'location'=>$this->location,
            'teachers'=>$this->teachers,
            'budgetOwner'=>$this->budgetOwner,
            'startDate'=>$this->startDate,
            'finishDate'=>$this->finishDate,
            'expert'=>$this->expert
        ];
    }
    public function rules()
    {
        return [
            ['groupName', 'type', 'type'=>'string', 'allowEmpty'=>false, 'length', 'min'=>3, 'max'=>20]
        ];
    }
}