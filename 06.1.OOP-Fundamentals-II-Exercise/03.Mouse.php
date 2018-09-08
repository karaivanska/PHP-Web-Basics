<?php

class Mouse extends Mammal
{
    function getSound()
    {
        return "SQUEEEAAAK!" . PHP_EOL;
    }

    function setEatenFood(Food $food)
    {
        if($food->getFood() != 'Vegetable'){
            throw new Exception('sasasa');
        }

        $this->food=$food;
    }

    function setQuantityFood(Food $quantity)
    {
        $this->foodEaten += $quantity->getQuantity();
    }

    function getQuantityFood()
    {
        return $this->foodEaten;
    }
}