<?php

class Human
{
    protected $firstName;
    protected $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    private function setFirstName($firstName)
    {
        if (!ctype_upper($firstName[0])) {
            throw new Exception('Expected upper case letter! Argument: firstName');

        } elseif (strlen($firstName) < 4) {
            throw new Exception('Expected length at least 4 symbols! Argument: firstName');
        }

        $this->firstName = $firstName;
    }

    private function setLastName($lastName)
    {
        if (!ctype_upper($lastName[0])) {
            throw new Exception('Expected upper case letter! Argument: lasstName');

        } elseif (strlen($lastName) < 3) {
            throw new Exception('Expected length at least 4 symbols! Argument: lastName');
        }

        $this->lastName=$lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}