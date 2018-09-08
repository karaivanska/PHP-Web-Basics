<?php

class FerrariTwo implements iFerrariTwo
{
    protected $driver;
    static $myObj = 0;
    private $myObjNumber;
    private $model = '488-Spider';

    public function __construct(string $driver)
    {
        $this->driver=$driver;
        self::$myObj++;
        $this->myObjNumber = self::$myObj;
    }

    public function setBrake()
    {
        return "Brakes!";
    }

    public function setGas()
    {
        return "Zadu6avam sA!";
    }

    public static function forUrl($driver, $rep = "-")
    {
        return strtolower(str_replace(' ', $rep, $driver));
    }

    public function __toString()
    {
        return  $this->model.'/'.
                $this->setBrake().'/'.
                $this->setGas().'/'.
                self::forUrl($this->driver).'/'.
                ' inst.' . $this->myObjNumber;
    }
}