<?php

class Frog extends Animals
{
    private $sound='Frogggg';


    public function produceSound()
    {
        return $this->sound;
    }
}