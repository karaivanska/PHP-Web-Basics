<?php

class Circle implements iArea
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getSurface()
    {
        return $this->result = pi() * $this->radius * $this->radius;
    }
}