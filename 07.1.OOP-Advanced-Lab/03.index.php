<?php
/*
A class can implement more than one interface. Let’s get back to our Circle. Besides an area,
a circle can have a circumference (the length of the line of the circle which is designated
by c). See the picture bellow. Now, let the class Circle implement the interface Area and
implement the interface Circumference. Area defines a method getSurface() and Circumference
defines a method getCircumference(). How would the two methods look for a Circle? Calculate
a circle’s surface/area and circumference. See the input /output table. For the calculation
of circumference look at: http://mathworld.wolfram.com/Circle.html
 */

require '03.Circle.php';

interface iArea
{
    public function getSurface();
}

interface iCircumference
{
    public function getCircumference();
}

$input = readline();
$myCircle = new Circle($input);
echo  "Circle with radius = " . $myCircle->getRadius() . " mm" . PHP_EOL .
      "Area = " . $myCircle->getSurface(). " mm" . PHP_EOL .
      "Circumference = " . $myCircle->getCircumference() . " mm" . PHP_EOL;

