<?php
/*
Your totalitarian dystopian society suffers a shortage of food, so many rebels appear. Extend
the code from your previous task with new functionality to solve this task.
Define a class Rebel which has a name, age and group (string), names are unique - there will
never be 2 Rebels/Citizens or a Rebel and Citizen with the same name.
Define an interface Buyer which defines a method BuyFood() and an integer property food
(in the classes implementing the interface). Implement the Buyer interface in the Citizen
and Rebel class, both Rebels and Citizens start with 0 food, when a Rebel buys food his
Food increases by 5, when a Citizen buys food his Food increases by 10. On the first line
of the input you will receive an integer N - the number of people, on each of the next N
lines you will receive information in one of the following formats “<name> <age> <id>
<birthdate>” for a Citizen or “<name> <age><group>” for a Rebel. After the N lines until
the command “End” is received, you will receive names of people who bought food, each
on a new line. Note that not all names may be valid, in case of an incorrect name - nothing
should happen. On the only line of output you should print the total amount of food purchased.
 */

class Rebel implements iBuyer
{
    private $name;
    private $age;
    private $group;
    private $food = 5;

    public function __construct(string $name, int $age, string $group)
    {
        $this->setName($name);
        $this->age=$age;
        $this->group=$group;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function buyFood()
    {
        return $this->food;
    }

    public function getName()
    {
        return $this->name;
    }
}