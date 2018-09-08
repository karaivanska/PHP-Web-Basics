<?php
/*
You are given a geometric figure box with parameters length, width
and height. Model a class Box that that can be instantiated by the
same three parameters. Expose to the outside world only methods for
its surface area, lateral surface area and its volume (formulas:
http://www.mathwords.com/r/rectangular_parallelepiped.htm).
The lateral surface area of a three-dimensional object is the surface
area of the object minus the area of its bases.
On the first three lines you will get the length, width and height.
Print three lines with the surface area, lateral surface area and
the volume of the box:
Print exactly two digits after every double value's decimal separator
(e.g. 10.00). See the built-in PHP function round().
A box’s side should not be zero or a negative number. Expand your class
from the previous problem by adding data validation by  using setters
for each parameter given to the constructor (this makes 3 setters).
 */

$length = floatval(fgets(STDIN));
$width = floatval(fgets(STDIN));
$height = floatval(fgets(STDIN));

include '01.Box.php';

try{
    $parallelepipe = new Box($length, $width, $height);
    $parallelepipe->validate($length, $width, $height);
    echo "Surface Area - " . $parallelepipe->surfaceArea() . PHP_EOL;
    echo "Lateral Area - " . $parallelepipe->lateralArea() . PHP_EOL;
    echo "Volume - " . $parallelepipe->volume() . PHP_EOL;

} catch (\Exception $e){
    echo $e->getMessage();
}


