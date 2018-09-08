<?php

class Vegetable extends Food
{
    public function setFood($food)
    {
        $this->food=$food;
    }

    public function getFood()
    {
        return $this->food;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}