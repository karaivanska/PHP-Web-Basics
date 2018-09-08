<?php

abstract class Mammal extends Animal
{
    protected $livingRegion;

    public function __construct($name, $type, $weight, $livingRegion)
    {
        parent::__construct($name, $type, $weight);
        $this->livingRegion = $livingRegion;
    }
}

abstract class Felime extends Mammal{

}