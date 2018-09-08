<?php

class Siamese
{
    private $breed;
    private $name;
    private $earSize;

    public function __construct($breed, $name, $earSize)
    {
        $this->setBreed($breed);
        $this->setName($name);
        $this->setEarSize($earSize);
    }

    private function setBreed($breed)
    {
        $this->breed=$breed;
    }

    private function setName($name)
    {
        $this->name=$name;
    }

    private function setEarSize($earSize)
    {
        $this->earSize = $earSize;
    }

    public function __toString()
    {
        return $this->breed . " " . $this->name . " " . $this->earSize;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEarSize()
    {
        return $this->earSize;
    }
}