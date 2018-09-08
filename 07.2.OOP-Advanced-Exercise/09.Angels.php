<?php

class Angels extends Demons implements iMana
{
    private $mana;
    private $reversed;

    public function __construct(string $username, string $characterType, int $level, float $specialPoints)
    {
        parent::__construct($username, $characterType, $level, $specialPoints);
        $this->setReversedUsername($username);
        $this->setMana($specialPoints, $level);
    }

    public function setReversedUsername($username)
    {
        $this->reversed = strrev($username);
    }

    public function getReversedUsername()
    {
        return $this->reversed;
    }

    public function setHashedPassword($username)
    {
        $this->hashedPassword = strlen($username) * 21;
    }

    public function setMana($specialPoints, $level)
    {
        $this->mana = $specialPoints * $level;
    }

    public function getMana()
    {
        return $this->mana;
    }
}