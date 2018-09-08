<?php

class Citizen implements iPerson
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function __toString()
    {
        return $this->name . ", " . $this->age . PHP_EOL;
    }
}