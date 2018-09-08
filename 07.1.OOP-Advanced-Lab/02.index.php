<?php
/*
Now we extend the previous task with one more class: Rectangle. The rectangle
doesn’t have a radius but width and height. So its area is calculated in a different
way. But the Area interface should be applied to it also. Implement the method getArea()
in the Rectangle class. What is different in the method now?
Create an instance of a Rectangle $myRec and calculate the area of a specific rectangle
as given in the Input /Output example
 */
require '02.Circle.php';
require '02.Rectangle.php';

interface iArea
{
    public function getSurface();
}

$input = explode(' ', readline());
var_dump($input);

if(count($input) == 1){
    $myCircle = new Circle($input[0]);
    echo  "Circle, radius = " . $myCircle->getRadius() . " mm, area = " . $myCircle->getSurface(). " mm" . PHP_EOL;

} elseif (count($input) == 2){
    $myRectangle = new Rectangle($input[0], $input[1]);
    echo  "Rectangle, width = " . $myRectangle->getWidth() . " mm, heigth = " . $myRectangle->getHeigh(). " mm, " . "area = " . $myRectangle->getSurface() ." mm" . PHP_EOL;
}