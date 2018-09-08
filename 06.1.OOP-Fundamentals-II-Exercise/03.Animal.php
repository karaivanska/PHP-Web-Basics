<?php

abstract class Animal
{
    protected $name;
    protected $type;
    protected $weight;
    protected $livingRegion = null;
    protected $foodEaten = 0;

    public function __construct($name, $type, $weight)
    {
        $this->name = $name;
        $this->type = $type;
        $this->weight = $weight;
    }

    abstract function getSound();
    //abstract function setEatenFood(Food $food);
    abstract function setQuantityFood(Food $food);
    //abstract function getEatenFood();
    abstract function getQuantityFood();

    public function __toString()
    {
        return $this->type . "[" . $this->name . ", " . $this->weight . ", " . $this->livingRegion . ", " . $this->foodEaten . "]";
    }
}