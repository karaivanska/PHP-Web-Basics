<?php
/*Create a class Person. Every person should have name, age and occupation.
Your task is to create the class and read some people, while adding them to
an array. Sort them by age and print them in the given format. Define magic
method __toString() and use custom sorting function for arrays.
 */

class Person{
    private $name;
    private $age;
    private $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name=$name;
        $this->age=$age;
        $this->occupation=$occupation;
    }

    public function __toString()
    {
        return $this->name . " - age: " . $this->age . ", occupation: " . $this->occupation;
    }
}
$input = trim(fgets(STDIN));

$people = array();
while($input != 'END'){
    $args = explode(' ', $input);
    $personName = trim($args[0]);
    $personAge = intval($args[1]);
    $personOccup = trim($args[2]);

    $person = new Person($personName, $personAge, $personOccup);
    $people[] = $person;

    $input = trim(fgets(STDIN));
}

usort($people, 'cmpAge');
function cmpAge($a, $b){
    return $a->age > $b->age;
}

foreach ($people as $person) {
    echo "$person\n";
}