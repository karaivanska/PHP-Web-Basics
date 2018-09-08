<?php

class Box
{
    protected $length;
    protected $width;
    protected $height;

    public function __construct(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function validate($length, $width, $height)
    {
        if ($length <= 0) {
            throw new Exception('Length cannot be zero or negative.');
        }

        if($width <= 0){
            throw new Exception('Width cannot be zero or negative.');
        }

        if($height <= 0){
            throw new Exception('Height cannot be zero or negative.');

        }
    }

    public function lateralArea()
    {
        return (number_format((2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2));
    }

    public function surfaceArea()
    {
        return (number_format((2 * $this->length * $this->width) + (2 * $this->length * $this->height) + (2 * $this->width * $this->height), 2));
    }

    public function volume()
    {
        return (number_format(($this->length * $this->width * $this->height), 2));
    }
}
