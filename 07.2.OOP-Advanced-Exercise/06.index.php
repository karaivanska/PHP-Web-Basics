<?php
/*
It’s the future, you’re the ruler of a totalitarian dystopian society inhabited by citizens
and robots, since you’re afraid of rebellions you decide to implement strict control of who
enters your city. Your soldiers check the Ids of everyone who enters and leaves. Define an
Interface which should be implemented by both citizens and robots.
Input
You will receive from the console an unknown amount of lines until the command “End” is
received, on each line there will be the information for either a citizen or a robot who tries
to enter your city in the format “<name> <age> <id>” for citizens and “<model> <id>” for robots.
After the end command on the next line you will receive a single number representing the last
digits of fake ids, all citizens or robots whose Id ends with the specified digits must be detained.
Output
The output of your program should consist of all detained Ids each on a separate line (print in
the same order of appearance).
 */
interface iId{
    public function getIndavidualId();
}

include '06.Citizenss.php';
include '06.Robots.php';

$input = readline();
$citizens = [];
$robots = [];

while($input != 'End'){
    $args = explode(' ', $input);

    if(count($args) == 2){
        $robot_model = strval($args[0]);
        $robot_id = intval($args[1]);
        $robot = new Robots($robot_model, $robot_id);
        $robots[] = $robot;

    } elseif (count($args) == 3){
        $citizen_name = strval($args[0]);
        $citizen_age = intval($args[1]);
        $citizen_id = intval($args[2]);
        $citizen = new Citizenss($citizen_name, $citizen_age, $citizen_id);
        $citizens[] = $citizen;
    }
    $input = readline();
}

$pattern = readline();
$n = strlen($pattern);

foreach ($citizens as $citizen){
    if (substr(rtrim($citizen->getIndavidualId()), -$n) == $pattern) {
        echo $citizen->getIndavidualId() . PHP_EOL;
    }
}

foreach ($robots as $robot){
    if (substr(rtrim($robot->getIndavidualId()), -$n) == $pattern) {
        echo $robot->getIndavidualId() . PHP_EOL;
    }
}