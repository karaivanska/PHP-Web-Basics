<?php
/*
It is a well known fact that people celebrate birthdays, it is also known that some people also
celebrate their pets birthdays. Extend the program from your last task to add birthdates to
citizens and include a class Pet, pets have a name and a birthdate. Encompass repeated functionality
into interfaces and implement them in your classes. You will receive from the console an unknown
amount of lines until the command “End” is received,  each line will contain information in one of
the following formats “Citizen <name> <age> <id> <birthdate>” for citizens, “Robot <model> <id>”
for robots or “Pet <name> <birthdate>” for pets. After the end command on the next line you will
receive a single number representing a specific year, your task is to print all birthdates (of both
citizens and pets) in that year in the format day/month/year (print in order of appearance).
 */

interface iBirthdate
{
    public function getBirthDate();
}

include '07.Citizenss.php';
include '07.Pets.php';
include '07.Robotss.php';

$input = explode(' ', readline());
$citizens = array();
$pets = array();
$robots = array();

while ($input[0] != 'End') {

    if ($input[0] == 'Citizen') {
        $citizen_name = $input[1];
        $citizen_age = intval($input[2]);
        $citizen_id = intval($input[3]);
        $citizen_birth = strval($input[4]);
        $citizen = new Citizenss($citizen_name, $citizen_age, $citizen_id, $citizen_birth);
        $citizens[] = $citizen;

    } elseif ($input[0] == 'Robot') {
        $robot_model = $input[1];
        $robot_id = $input[2];

    } elseif ($input[0] == 'Pet') {
        $pet_name = $input[1];
        $pet_birth = $input[2];
        $pet = new Pets($pet_name, $pet_birth);
        $pets[] = $pet;

    }

    $input = explode(' ', readline());
}

$input = readline();


foreach ($citizens as $citizen) {
    if ($input == $citizen->getBirthYear()) {
        echo $citizen->getBirthDate() . PHP_EOL;
    }
}

foreach ($pets as $pet) {
    if ($input == $pet->getBirthYear()) {
        echo $pet->getBirthDate();
    }
}
