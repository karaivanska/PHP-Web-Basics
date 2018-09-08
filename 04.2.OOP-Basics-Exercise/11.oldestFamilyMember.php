<?php
/*
Create class Person with fields name and age. Create a class Family.
The class should have list of people, method for adding members
(void addMember(Person member)) and a method returning the oldest
family member (Person getOldestMember()). Write a program that reads
name and age for N people and adds them to the family. Then print
the name and age of the oldest member. If you’ve defined the class
correctly, the test should pass.
 */

class Person
{
    private $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name . " " . $this->age;
    }
}

class Family
{
    private $members = array();
    private $oldestMember = null;

    public function addMember(Person $member)
    {
        $this->members[] = $member;
        //ako $oldestMember ==  null -> $oldestMember = current member
        //ako $oldestMember = $member != null
        if ($this->oldestMember == null || $this->oldestMember->getAge() < $member->getAge()) {
            $this->oldestMember = $member;
        }
    }

    public function getOldestMember()
    {
        return $this->oldestMember;
    }
}

$n = intval(trim(fgets(STDIN)));
$family = new Family();

for ($i = 0; $i < $n; $i++) {
    $args = explode(' ', trim(fgets(STDIN)));
    $memberName = trim($args[0]);
    $memberAge = intval($args[1]);
    $person = new Person($memberName, $memberAge);
    $family->addMember($person);
}

echo $family->getOldestMember();
