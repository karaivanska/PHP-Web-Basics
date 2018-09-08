<?php

class Ferrari implements iFerrari
{
    private $driver;
    private $model = '488-Spider';

    public function __construct($driver)
    {
        $this->driver=$driver;
    }

    public function setBrake()
    {
       return "Brakes!";
    }

    public function setGas()
    {
        return "Zadu6avam sA!";
    }

    public function __toString()
    {
        return $this->model.'/'.$this->setBrake().'/'.$this->setGas().'/'.$this->driver;
    }
}