<?php
/*
Write a program that receives two points in the format x1, y1, x2, y2
and checks if the distances between each point and the start of the
cartesian coordinate system (0, 0) and between the points themselves
is valid. A distance between two points is considered valid, if it
is an integer value. In case a distance is valid write "{x1, y1} to
{x2, y2} is valid", in case the distance is invalid write "{x1, y1} to
{x2, y2} is invalid". The order of comparisons should always be first
{x1, y1} to {0, 0}, then {x2, y2} to {0, 0} and finally {x1, y1} to
{x2, y2}. The input consists of one string in which the coordinates are
separated by “, “(look at the examples). For each comparison print on
the output either "{x1, y1} to {x2, y2} is valid" if the distance between
them is valid, or "{x1, y1} to {x2, y2} is invalid"- if it’s invalid.
 */

$array = explode(", ",fgets(STDIN));

$x1 = floatval($array[0]);
$y1 = floatval($array[1]);
$x2 = floatval($array[2]);
$y2 = floatval($array[3]);

function check($x1, $y1, $x2, $y2)
{
    $cal = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
    if ((int)$cal == $cal) {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid\n";
    } else {
        return $sum = "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid\n";
    }
}
echo check($x1, $y1, 0, 0);
echo check($x2, $y2, 0, 0);
echo check($x1, $y1, $x2, $y2);