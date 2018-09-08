<?php

class Kitten extends Cat
{
    private $sound='Miau';


    public function produceSound()
    {
        return $this->sound;
    }
}