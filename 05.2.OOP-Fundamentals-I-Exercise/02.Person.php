<?php

class Person
{
    protected $name;
    protected $money;
    protected $bagOfProducts = [];

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    public function setPersonName($name)
    {
        if(empty($name)){
            throw new Exception('Name can not be empty!');
        }
        $this->name;
    }

    public function setPersonMoney($money)
    {
        if($money < 0){
            throw new Exception('Money can not be negative!');
        }
        $this->money;
    }

    public function setBag():array
    {
        if($this->name->getProductCost())
    }

    public function getPersonName()
    {
        return $this->name;
    }

    public function getPersonMoney()
    {
        return $this->money;
    }

    public function getBag():array
    {
        return $this->bagOfProducts;
    }


}