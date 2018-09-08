<?php
/*
Ginka has many cats in her house of various breeds, since some breeds have specific
characteristics, Ginka needs some way to catalogue the cats, help her by creating a
class hierarchy with all her breeds of cats so that she can easily check on their
characteristics. Ginka has 3 specific breeds of cats “Siamese”, “Cymric” and the very
famous bulgarian breed “Street Extraordinaire”,  each breed has a specific characteristic
about which information should be kept. For the Siamese cats their ear size should be kept,
for Cymric cats - the length of their fur in milimeters and for the Street Extraordinaire the
decibels of their meowing during the night. From the console you will receive lines of cat
information until the command “End” is received, the information will come in one of the
following formats:
•	“Siamese <name> <earSize>”
•	“Cymric <name> <furLength>”
•	“StreetExtraordinaire <name> <decibelsOfMeows>”
On the last line after the “End” command you will receive the name of a cat, you should print
that cat’s information in the same format in which you received it.
 */

include '08.Cymric.php';
include '08.Siamese.php';
include '08.StreetExtraordinaire.php';

$input = trim(fgets(STDIN));
$cymric = array();
$siamese = array();
$streetExt = array();

while ($input != 'End') {
    $args = explode(' ', $input);

    $breed = trim($args[0]);
    $cat_name = trim($args[1]);
    $number = intval($args[2]);

    if($breed == 'Cymric'){
        $cat = new Cymric($breed, $cat_name, $number);
        $cymric[] = $cat;

    } elseif ($breed == 'Siamese'){
        $cat = new Siamese($breed, $cat_name, $number);
        $siamese[] = $cat;

    } elseif ($breed == 'StreetExtraordinaire'){
        $cat = new StreetExtraordinaire($breed, $cat_name, $number);
        $streetExt[] = $cat;
    }

    $input = trim(fgets(STDIN));
}

$input = trim(fgets(STDIN));

foreach ($cymric as $cat) {
    if($input == $cat->getName()){
        echo $cat;
    }
}

foreach ($siamese as $cat) {
    if($input == $cat->getName()){
        echo $cat;
    }
}

foreach ($streetExt as $cat) {
    if($input == $cat->getName()){
        echo $cat;
    }
}


