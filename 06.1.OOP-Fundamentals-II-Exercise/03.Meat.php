<?php

class Meat extends Food
{
    public function getFood()
    {
        return $this->food;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}