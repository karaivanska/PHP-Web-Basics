<?php

class Rectangle implements iArea{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeigh()
    {
        return $this->height;
    }
    public function getSurface()
    {
        return $this->width * $this->height;
    }
}