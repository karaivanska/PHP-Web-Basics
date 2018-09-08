<?php

class Cat extends Felime
{
    private $breed;

    public function __construct($name, $type, $weight, $livingRegion, $breed)
    {
        parent::__construct($name, $type, $weight, $livingRegion);
        $this->breed = $breed;
    }

    public function getSound()
    {
        return "Meowwww" . PHP_EOL;
    }

    public function setQuantityFood(Food $food)
    {
        $this->foodEaten += $food->getQuantity();
    }

    public function getQuantityFood()
    {
        return $this->foodEaten;
    }

    public function __toString()
    {
        return $this->type . "[" . $this->name . ", " . $this->breed . ", " . $this->weight . ", " . $this->livingRegion . ", " . $this->foodEaten . "]";
    }
}