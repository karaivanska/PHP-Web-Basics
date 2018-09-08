<?php
/*
Write a functional script that either sums or subtracts values in an
array. The output should be an array which should have the same
indexes as the input array but with the result of the operation.
The two operations should be done in two anonymous functions held in
$opSum and $opSubtract. The work should be done by an anonymous
function stored in $simpleCalc which will use either $opSum or $opSubtract.
 */

$inputArr = [
    ['sum',12, 156],
    ['subtract',5, 6],
    ['sum',1, 2],
];

$opSum = function ($a, $b) {
    return $a + $b;
};

$opSubtract = function ($a, $b) {
    return $a - $b;
};

$simpleCalc = function (&$simpleCalc, $inputArr, $i = 0, $output = []) use ($opSum, $opSubtract){

    if ($i<count($inputArr)){

        $op = $inputArr[$i][0];
        $a = $inputArr[$i][1];
        $b = $inputArr[$i][2];

        if ($a < 0 || $a > 100 || $b < 0 || $b > 100){
            $output[] = 'error';
            return $simpleCalc ($simpleCalc, $inputArr, $i+1, $output);

        } else if($op == 'sum') {
            $output[] = $opSum($a, $b);
            return $simpleCalc ($simpleCalc, $inputArr, $i+1, $output);

        }  else if ($op == 'subtract') {
            $output[] = $opSubtract($a, $b);
            return $simpleCalc($simpleCalc, $inputArr, $i+1, $output);

        }
    }else{
        return $output;
    }
};

$output = $simpleCalc($simpleCalc,$inputArr);
print_r($output);




//print_r($resultArr);

