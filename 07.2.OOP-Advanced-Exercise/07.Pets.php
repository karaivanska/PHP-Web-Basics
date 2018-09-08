<?php

class Pets implements iBirthdate {

    private $name;
    private $birth;
    private $year;

    public function __construct(string $name, string $birth)
    {
        $this->name=$name;
        $this->setBirthDate($birth);
        $this->setBirthYear($birth);
    }

    public function setBirthYear($birth)
    {
        $yearStr = substr($birth, -4);
        $this->year=$yearStr;
    }

    public function getBirthYear()
    {
        return $this->year;
    }

    public function setBirthDate($birth)
    {
        $this->birth=$birth;
    }

    public function getBirthDate()
    {
        return $this->birth;
    }
}