<?php


class Cat extends Animals
{
    private $sound='MiauMiau';

    public function produceSound()
    {
        return $this->sound;
    }

}