<?php
/*
Write a PHP script SumTwo.php by using an anonymous function
which is held in the variable $sumTwo. Use the function inside
echo. In your code sum 7.1234 and 7.4321 by calling the
anonymous function (hard-code the input as an argument of echo).
 */

$sum = function ($num1, $num2){
    return "The sum is: " . ($num1 + $num2);
};
echo $sum(7.1234,7.4321);


