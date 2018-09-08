<?php
/*
You will be given the coordinates of 3 points on a 2D plane.
Write a program that finds the two shortest segments that connect
them (without going back to the starting point). When determining
the listing order, use the order with the lowest numerical value
(see the figure in the hints for more information). The input comes
as a string with  6 elements separated by “, “ that must be parsed
to numbers. The order is x1, y1, x2, y2, x3, y3. The output is the
return value of your program as a string, representing the order
in which the three points must be visited and the final distance
between them.
 */

list($x1, $y1, $x2, $y2, $x3, $y3) = array(-1, -2, 3.5, 0, 0, 2);

function calcDistance(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
{
    $AB = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y1 - $y2) * ($y1 - $y2));
    $BC = sqrt(($x2 - $x3) * ($x2 - $x3) + ($y2 - $y3) * ($y2 - $y3));
    $CA = sqrt(($x1 - $x3) * ($x1 - $x3) + ($y1 - $y3) * ($y1 - $y3));
    $ABC = $AB + $BC;
    $BCA = $AB + $CA;
    $ACB = $CA + $BC;
    $x1 = min($ABC, $BCA, $ACB);
    $x2 = max($ABC, $BCA, $ACB);

    $print = "";
    if ($ABC < $ACB) {
        $print = '1->2->3: ' . $ABC;
    } else if ($BCA < $ACB) {
        $print = '2->1->3: ' . $BCA;
    } else if ($ACB < $BCA) {
        $print = '1->3->2: ' . $ACB;
    }
    return $print;
}

echo calcDistance($x1, $y1, $x2, $y2, $x3, $y3);