<?php

class StreetExtraordinaire
{
    private $breed;
    private $name;
    private $decibelsOfMeows;

    public function __construct($breed, $name, $decibelsOfMeows)
    {
        $this->setBreed($breed);
        $this->setName($name);
        $this->setDecibelsOfMeows($decibelsOfMeows);
    }

    private function setBreed($breed)
    {
        $this->breed=$breed;
    }

    private function setName($name)
    {
        $this->name=$name;
    }

    private function setDecibelsOfMeows($decibelsOfMeows)
    {
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    public function __toString()
    {
        return $this->breed . " " . $this->name . " " . $this->decibelsOfMeows;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDecibelsOfMeows()
    {
        return $this->decibelsOfMeows;
    }
}