<?php

class Product
{
    protected $productName;
    protected $cost;

    public function __construct($productName, $cost)
    {
        $this->productName = $productName;
        $this->cost = $cost;
    }

    public function setProductName($productName)
    {
        if (empty($productName)) {
            throw new Exception('Product name can not be empty!');
        }
        $this->productName=$productName;
    }

    public function setProductCost()
    {
        if ($this->cost < 0) {
            throw new Exception('Money can not be negative!');
        }

        $this->cost;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductCost()
    {
        return $this->cost;
    }

}