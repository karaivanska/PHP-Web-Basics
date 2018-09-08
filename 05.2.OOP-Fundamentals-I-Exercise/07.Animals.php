<?php

class Animals
{
    private $animal;
    private $animalName;
    private $age;
    private $gender;

    public function __construct($animalName, $age, $gender)
    {
       $this->setName($animalName);
       $this->setAge($age);
       $this->setGender($gender);
    }

    /*private function setAnimal($animal)
    {
        if(empty($animal)){
            throw new Exception('Invalid input!');
        }
        $this->animal=$animal;
    } */

    private function setName($animalName)
    {
        if($animalName === null){
            throw new Exception('Invalid input!');
        }

        $this->animalName=$animalName;
    }

    private function setAge($age)
    {
        if($age === null || $age < 0){
            throw new Exception('Invalid input!');
        }

        $this->age=$age;
    }

    private function setGender($gender)
    {
        if($gender === null){
            throw new Exception('Invalid input!');
        }

        $this->gender=$gender;
    }

    public function __toString()
    {
        return $this->animalName . " " . $this->age . " " . $this->gender;
    }

    public function getName()
    {
        return $this->animalName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGender()
    {
        return $this->gender;
    }
}