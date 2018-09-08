<?php

class Circle implements iArea, iCircumference
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
        return  pi() * $this->radius * $this->radius;
    }

    public function getCircumference()
    {
        return 2 * pi() * $this->radius;
    }
}