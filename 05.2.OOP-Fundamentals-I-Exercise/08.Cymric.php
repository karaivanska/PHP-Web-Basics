<?php

class Cymric
{
    private $breed;
    private $name;
    private $furLength;

    public function __construct($breed, $name, $furLength)
    {
        $this->setBreed($breed);
        $this->setName($name);
        $this->setFurLength($furLength);
    }

    private function setBreed($breed)
    {
        $this->breed=$breed;
    }

    private function setName($name)
    {
        $this->name=$name;
    }

    private function setFurLength($furLength)
    {
        $this->furLength = $furLength;
    }

    public function __toString()
    {
        return $this->breed . " " . $this->name . " " . $this->furLength;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFurLength()
    {
        return $this->furLength;
    }
}