<?php

class Dog extends Animals
{
    private $sound='BauBau';


    public function produceSound()
    {
        return $this->sound;
    }
}