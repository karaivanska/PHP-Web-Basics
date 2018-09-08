<?php

class Students
{
    private $first_name;
    private $last_name;
    private $course_name;

    public function __construct($first_name, $last_name, $course_name)
    {
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->course_name=$course_name;
    }

    public function insertStudent($db)
    {
        $query = $db->prepare('INSERT INTO `students` (first_name, last_name,  course_name) VALUES (?,?,?)');
        $query->execute(array($this->first_name, $this->last_name, $this->course_name));
    }
}