<?php

class Citizen implements iPerson, iBirthdable, iIdentifiable
{
    private $name;
    private $age;
    private $id;
    private $birthDate;

    public function __construct(string $name, int $age, int $id, string $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthDate);

    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setBirthdate($birthDate)
    {
        $this->birthDate=$birthDate;
    }

    public function __toString()
    {
        return $this->name . ", " . $this->age . ", ID = " . $this->id . ", " . $this->birthDate . PHP_EOL;
    }
}