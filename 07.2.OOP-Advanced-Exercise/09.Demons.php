<?php

class Demons implements iEnergy
{
    protected $username;
    protected $hashedPassword;
    protected $level;
    protected $specialPoints;
    private $characterType;
    private $energy;

    public function __construct(string $username, string $characterType, int $level, float $specialPoints)
    {
        $this->setUsername($username);
        $this->setCharacterType($characterType);
        $this->setHashedPassword($username);
        $this->setEnergy($specialPoints, $level);
        $this->setLevel($level);
        $this->specialPoints=$specialPoints;

    }

    public function setUsername($username)
    {
        if(strlen($username) <= 10){
            $this->username=$username;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setCharacterType($charachterType)
    {
        $this->characterType=$charachterType;
    }

    public function getCharacterType()
    {
        return $this->characterType;
    }

    public function setHashedPassword($username)
    {
        $this->hashedPassword=strlen($username) * 217;
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function setLevel($level)
    {
        $this->level=$level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setEnergy($specialPoints, $level)
    {
        $this->energy = number_format($specialPoints * $level,1);
    }

    public function getEnergy()
    {
        return $this->energy;
    }
}