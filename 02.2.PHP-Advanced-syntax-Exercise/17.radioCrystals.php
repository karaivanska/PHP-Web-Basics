<?php
/*
It’s time to put your skills to work for the war effort – creating
management software for a radio transmitter factory. Radios require
a finely tuned quartz crystal in order to operate at the correct
frequency. The resource used to produce them is quartz ore that
comes in big chunks and needs to undergo several processes, before
it reaches the desired properties. You need to write a program that
monitors the current thickness of the crystal and recommends the next
procedure that will bring it closer to the desired frequency. To
reduce waste and the time it takes to make each crystal your program
needs to complete the process with the least number of operations.
Each operation takes the same amount of time, but since they are
done at different parts of the factory, the crystals have to be
transported and thoroughly washed every time an operation different
from the previous must be performed, so this must also be taken into
account. When determining the order, always attempt to start from
the operation that removes the largest amount of material.
The different operations you can perform are the following:
•	Cut – cuts the crystal in 4
•	Lap – removes 20% of the crystal’s thickness
•	Grind – removes 20 microns of thickness
•	Etch – removes 2 microns of thickness
•	X-ray – increases the thickness of the crystal by 1 micron; this operation can only be done once!
•	Transporting and washing – removes any imperfections smaller than 1 micron (round down the number); do this after every batch of operations that remove material
At the beginning of your program, you will receive a number representing
the desired final thickness and a series of numbers, representing
the thickness of crystal ore in microns. Process each chunk and print
to the console the order of operations and number of times they need
to be repeated to bring them to the desired thickness. The input comes
as a string  with a variable number of elements separated by “, “
that must be parsed to numbers. The first number is the target thickness
and all following numbers are the thickness of different chunks of
quartz ore. The output is the order of operation and how many times
they are repeated, every operation on a new line. See the examples
for more information.
 */

$inputArr = explode(", ", fgets(STDIN));
$target = $inputArr[0];

for ($i = 1; $i < count($inputArr); $i++) {
    $startingNum = trim($inputArr[$i]);

    echo "Processing chunk $startingNum microns\n";
    $counter = 0;

    while ($startingNum / 4 >= $target) {
        $startingNum = cut($startingNum);
        $counter++;
    }
    if ($counter != 0) {
        echo "Cut x$counter\n";
        transporting();
        $counter = 0;
    }

    $startingNum = floor($startingNum);

    while (($startingNum * 0.8) >= $target) {
        $startingNum = lap($startingNum);
        $counter++;
    }

    if ($counter != 0) {
        echo "Lap x$counter\n";
        transporting();
        $counter = 0;
        $startingNum = floor($startingNum);
    }

    while ($startingNum - 20 >= $target) {
        $startingNum = grind($startingNum);
        $counter++;
    }

    if ($counter != 0) {
        echo "Grind x$counter\n";
        transporting();
        $counter = 0;
        $startingNum = floor($startingNum);
    }

    while ($startingNum - 1 >= $target) {
        $startingNum = etch($startingNum);
        $counter++;
    }

    if ($counter != 0) {
        echo "Etch x$counter\n";
        transporting();
        $counter = 0;
        $startingNum = floor($startingNum);
    }

    if ($startingNum == $target - 1) {
        echo "X-ray x1\n";
        $startingNum = xRay($startingNum);
    }

    echo "Finished crystal $startingNum microns\n";
}

function transporting()
{
    echo "Transporting and washing\n";
}

function cut($num)
{
    return $num /= 4;
}

function lap($num)
{
    return $num *= 0.8;
}

function grind($num){
    return $num -= 20;
}

function etch($num){
    return $num -= 2;
}

function xRay($num)
{
    return $num += 1;
}