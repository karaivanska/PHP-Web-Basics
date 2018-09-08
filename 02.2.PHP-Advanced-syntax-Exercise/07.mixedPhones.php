<?php
/*
You will be given several phone entries, in the form of strings
in format: firstElement : secondElement
The first element is usually the person’s name, and the second
one – his phone number while the person’s name can consist of any
ASCII characters. Sometimes the phone operator gets distracted
by the Minesweeper she plays all day, and gives you first the
phone, and then the name. e.g. : 0888888888 : Pesho. You must
store them correctly, even in those cases. When you receive
the command “Over”, you are to print all names you’ve stored
with their phones. The names must be printed in alphabetical order.
 */

$input = trim(fgets(STDIN));
$phone = '/\d+/';
$phonebook = [];

while ($input != 'Over') {
    $commandArgs = explode(' : ', $input);
    $name = [];
    $phones = $commandArgs[1];

    if (preg_match($phone, $phones)) {
       $phones = $commandArgs[1];
       $name = $commandArgs[0];
    } else {
        $phones = $commandArgs[0];
        $name = $commandArgs[1];
    }

    if(!array_key_exists($name, $phonebook)){
        $phonebook[$name] = $phones;
    }

    $input = trim(fgets(STDIN));
}
ksort($phonebook);

foreach ($phonebook as $name => $phone) {
     echo "$name -> $phone\n";
}