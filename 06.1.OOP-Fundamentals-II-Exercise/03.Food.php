<?php

abstract class Food
{
    protected $food;
    protected $quantity;

    public function __construct($food, $quantity)
    {
        $this->food = $food;
        $this->quantity=$quantity;
    }

    abstract function getFood();
    abstract function getQuantity();
}