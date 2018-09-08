<?php

class Citizenss implements iBirthdate, iBuyer {

    private $name;
    private $age;
    private $id;
    private $birth;
    private $year;
    private $food = 10;

    public function __construct(string $name, int $age, int $id, string $birth)
    {
        $this->setName($name);
        $this->age=$age;
        $this->id=$id;
        $this->setBirthDate($birth);
        $this->setBirthYear($birth);
    }

    public function setName($name)
    {
        $this->name=$name;
    }
    public function setBirthYear($birth)
    {
        $yearStr = substr($birth, -4);
        $this->year=$yearStr;
    }

    public function getBirthYear()
    {
        return $this->year;
    }

    public function setBirthDate($birth)
    {
        $this->birth=$birth;
    }

    public function getBirthDate()
    {
        return $this->birth;
    }

    public function buyFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }
}