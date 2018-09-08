<?php

class Students extends Human
{
    private $facultyNum;

    public function __construct($firstName, $lastName, $facultyNum)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNum);
    }

    private function setFacultyNumber($facultyNum)
    {
        if(strlen($facultyNum) < 5 or strlen($facultyNum) > 10){
            throw new Exception('Invalid faculty number!');
        }

        $this->facultyNum=$facultyNum;
    }

    public function getFacultyNumber()
    {
        return $this->facultyNum;
    }

    public function __toString()
    {
        $output = "First Name: " . $this->firstName . "\n";
        $output .= "Last Name: " . $this->lastName . "\n";
        $output .= "Faculty Number: " . $this->facultyNum . "\n";

        return $output;
    }
}