<?php

class Citizenss implements iId {

    private $name;
    private $age;
    private $id;

    public function __construct(string $name, int $age, int $id)
    {
        $this->name=$name;
        $this->age=$age;
        $this->id=$id;
    }

    public function getIndavidualId():int
    {
        return $this->id;
    }
}