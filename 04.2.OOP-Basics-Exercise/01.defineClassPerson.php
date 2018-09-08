<?php
/*
Define a class Person with fields for name and age.
 */

class Person{
    public $name;
    public $age;
}

$person = new Person();
$person->name='Pesho';
$person->age=20;

$person = new Person();
echo(count(get_object_vars($person)));
