<?php

class Person{
    protected $name;
    protected $age;


    public function __construct($name, $age)
    {
       $this->setName($name);
       $this->setAge($age);
    }

    protected function setName($name)
    {
        if(strlen($name) < 3){
            throw new Exception('Name\'s length should not be less than 3 symbols.');
        }
        $this->name=$name;
    }

    protected function setAge($age)
    {
        if($age < 0){
            throw new Exception('Age must be positive!');
        }
        $this->age=$age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}