<?php
/*
You will receive the person name as an input. Write a class Person that only has a name
and a method. The method should describe a greeting by the person, returning a String
"<Person name> says Hello!". Print the result of the method call.
 */

class Person{
    public $name;

    public function __construct(string $name)
    {
        return $this->name=$name;
    }
}

$name = trim(fgets(STDIN));
$person = new Person($name);
$fields = count(get_object_vars($person));
$methods = count(get_class_methods($person));

if($fields != 1 || $methods != 1){
    throw new Exception("Too many fields or methods");
} else {
    print_r($person->name . ' say "Hello"!');
}