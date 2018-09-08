<?php
/*
Extend the code of problem 6 with two functions held in $opMultiply and
$opDivide. This should be applied the same way as $opSum and $opSubtract.
$opDivide may return an error when the second number is 0 (zero).
Constraints
•	The numbers should be between 0 and 100, integer or float, else an error
should be returned.
•	If number is out of range the error is out_of_range
•	If operation is division and second number is 0 then the error Is division_by_zero
•	If a certain number is not a number than the error is op1_not_numeric or
op2_not_numeric.
 */

$inputArr = [
    ['sum', 12, 133],
    ['subtract', 3, 3],
    ['sum', 1, 2],
    ['divide', 100, 0],
    ['divide', 100, 'PP'],
    ['sum', 'P123', 123]
];

$opSum = function ($a, $b) {
    return $a + $b;
};

$opSubtract = function ($a, $b) {
    return $a - $b;
};

$opMultiply = function ($a, $b) {
    return $a * $b;
};

$opDivide = function ($a, $b) {

    if ($b == 0) {
        return 'division_by_zero';
    }
    return $a / $b;
};

$simpleCalc = function (&$simpleCalc, $inputArr, $i = 0, $output = [])
use ($opSum, $opSubtract, $opMultiply, $opDivide) {

    if ($i < count($inputArr)) {

        $op = $inputArr[$i][0];
        $a = $inputArr[$i][1];
        $b = $inputArr[$i][2];

        if (!is_numeric($a) || !is_numeric($b)) {

            if (!is_numeric($a)) {
                $output[] = 'op1_not_numeric';
            }
            if (!is_numeric($b)) {
                $output[] = 'op2_not_numeric';
            }
            return $simpleCalc ($simpleCalc, $inputArr, $i + 1, $output);

        } else if ($a < 0 || $a > 100 || $b < 0 || $b > 100) {
            $output[] = 'out_of_range';
            return $simpleCalc ($simpleCalc, $inputArr, $i + 1, $output);

        } else if ($op == 'sum') {
            $output[] = $opSum($a, $b);
            return $simpleCalc ($simpleCalc, $inputArr, $i + 1, $output);

        } else if ($op == 'subtract') {
            $output[] = $opSubtract($a, $b);
            return $simpleCalc($simpleCalc, $inputArr, $i + 1, $output);

        } else if ($op == 'multiply') {
            $output[] = $opMultiply($a, $b);
            return $simpleCalc($simpleCalc, $inputArr, $i + 1, $output);

        } else if ($op == 'divide') {

            $output[] = $opDivide($a, $b);
            return $simpleCalc($simpleCalc, $inputArr, $i + 1, $output);
        }
    } else {
        return $output;
    }
};

$output = $simpleCalc($simpleCalc, $inputArr);
print_r($output);