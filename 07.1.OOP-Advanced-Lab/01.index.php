<?php
/*
Build a simple class Circle and an interface like this:
You should have one class called Circle with one property radius. Define an interface called
Area which calculates the area of the circle on the basis of its radius. It should implement
one method getSurface() which returns the area of the circle. For the calculation look at:
http://mathworld.wolfram.com/Circle.html
Create one instance of Circle and use the implemented method to calculate a circle with radius
10 mm.
 */

require '01.Circle.php';
interface iArea
{
    public function getSurface();
}

$input = readline();
$myCircle = new Circle($input);
echo  "Circle, radius = " . $myCircle->getRadius() . " mm, area = " . $myCircle->getSurface(). " mm" . PHP_EOL;
