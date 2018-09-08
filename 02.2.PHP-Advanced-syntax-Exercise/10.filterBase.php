<?php
/*
You have been tasked to sort out a database full of information about employees.
You will be given several input lines containing information in one of the following formats:
•	name -> age
•	name -> salary
•	name -> position
As you see you have 2 parameters. There can be only 3 cases of input:
If the second parameter is an integer, you must store it as name and age.
If the second parameter is a floating-point number, you must store it as name and salary.
If the second parameter is a string, you must store it as name and position.
You must read input lines, then parse and store the information from them,
until you receive the command “filter base”. When you receive that command,
the input sequence of employee information should end.
On the last line of input, you will receive a string, which can either be
“Age”, “Salary” or “Position”. Depending on the case, you must print all
entries which have been stored as name and age, name and salary, or name and position.
In case, the given last line is “Age”, you must print every employee, stored
with its age in the following format:
Name: name1
Age: age1
====================
Name: name2
. . .

In case, the given last line is “Salary”, you must print every employee, stored with
its salary in the following format:
Name: name1
Salary: salary1
====================
Name: name2
. . .

NOTE: The Salary must be formatted to 2 digits after the decimal point.
In case, the given last line is “Position”, you must print every employee, stored with
its position in the following format:
Name: name1
Position: position1
====================
Name: name2
. . .

NOTE: Every entry is separated with the other, with a string of 20 character ‘=’.
There is NO particular order of printing – the data must be printed in order of input.
 */

$input = trim(fgets(STDIN));
$salariesData = [];
$agesData = [];
$positionsData = [];

while ($input != 'filter base') {
    $args = explode(' -> ', $input);
    $name = $args[0];
    $param = $args[1];
    $age = 0;
    $salary = 0;
    $position = '';

    if (ctype_digit($param)) {
        $age = $param;
        if (!array_key_exists($name, $agesData)) {
            $agesData[$name] = $age;
        }

    } else if(ctype_alpha($param)){
        $position = $param;
        if (!array_key_exists($name, $positionsData)) {
            $positionsData[$name] = $position;
        }

    } else {
        $salary = $param;
        if (!array_key_exists($name, $salariesData)) {
            $salariesData[$name] = $salary;
        }
    }

    $input = trim(fgets(STDIN));
}

$input = trim(fgets(STDIN));

if($input == 'Salary'){
    foreach ($salariesData as $name => $salary) {
        echo "Name: $name\n";
        echo 'Salary:' . ' ' . number_format((float)$salary, 2, '.', '') . "\n";
        echo "====================\n";
    }
} else if($input == 'Position'){
    foreach ($positionsData as $name => $position) {
        echo "Name: $name\n";
        echo "Position: $position\n";
        echo "====================\n";
    }
} else if($input == 'Age'){
    foreach ($agesData as $name => $age) {
        echo "Name: $name\n";
        echo "Age: $age\n";
        echo "====================\n";
    }
}
