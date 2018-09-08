<?php
/*
You will be given a series of coordinates, leading to a buried treasure.
Use the map to the right to write a program that locates on which island
it is. After you find where all the treasure chests are, compose a list
and print it on the console. If a chest is not on any of the islands, print
 “On the bottom of the ocean” to inform your treasure-hunting team to bring
diving gear. If the location is on the shore (border) of the island, it’s
still considered to lie inside. The input comes as a string of variable number
of elements separated by “, “ that must be parsed to numbers. Each pair is
the coordinates to a buried treasure chest. The output is a list of the
locations of every treasure chest, either the name of an island or “On the
bottom of the ocean”, printed on the console.
 */

$inputArr = explode(',', fgets(STDIN));

function trim_value(&$value){
    $value = trim($value);
}

array_walk($inputArr, 'trim_value');

$lenght = count($inputArr);

for($i = 0; $i < $lenght - 1; $i+=2){
    $x = $inputArr[$i];
    $y = $inputArr[$i + 1];

    if(($x >= 1 && $x <= 3) && ($y >= 1 && $y <= 3)){
        echo "Tuvalu\n";

    } else if(($x >= 5 && $x <= 7) && ($y >= 3 && $y <= 6)){
        echo "Samoa\n";

    } else if(($x >= 8 && $x <= 9) && ($y >= 0 && $y <= 1)){
        echo "Tokelau\n";

    } else if(($x >= 0 && $x <= 2) && ($y >= 6 && $y <= 8)){
        echo "Tonga\n";

    } else if(($x >= 4 && $x <= 9) && ($y >= 7 && $y <= 8)){
        echo "Cook\n";
    } else {
        echo "On the bottom of the ocean\n";
    }
}