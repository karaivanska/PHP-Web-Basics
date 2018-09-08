<?php
/*
Write a function that determines whether a point is
inside the volume, defined by the box, shown on the right.
The input comes as a string representing the coordinates that
needs to be split and parsed as numbers. Each set of 3 elements
are the x, y and z coordinates of a point.The output should be
printed to the console on a new line for each point.
Print inside if the point lies inside the volume and outisde otherwise.
*/

function isVolume($input)
{
    $inputNums = explode(", ", $input);

    for ($i = 0; $i < count($inputNums); $i += 3) {
        $x = $inputNums[$i];
        $y = $inputNums[$i + 1];
        $z = $inputNums[$i + 2];

        $x1 = 10; $x2 = 50;
        $y1 = 20; $y2 = 80;
        $z1 = 15; $z2 = 50;

        if (($x1 <= $x && $x <= $x2) &&
            ($y1 <= $y && $y <= $y2) &&
            ($z1 <= $z && $z <= $z2)) {
            echo "inside" . "\n";
        } else {
            echo "outside" . "\n";
        }
    }
}
$number = fgets(STDIN);
isVolume($number);









