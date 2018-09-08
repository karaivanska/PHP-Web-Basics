<?php
/*
Write a program that receives a number and a list of five operations.
Perform the operations in sequence by starting with the input number
and using the result of every operation as starting point for the next.
Print the result of every operation in order. The operations can be one
of the following:
•	chop – divide the number by two
•	dice – square root of number
•	spice – add 1 to number
•	bake – multiply number by 3
•	fillet – subtract 20% from number
The input comes in 2 lines. On the first line you will receive your starting
point and must be parsed to a number. On the second line you will receive 5
commands separated by “, “ each one will be the name of the operation to be
performed. The output should be printed on the console. Do not round the result.
 */

$inputNum = intval(fgets(STDIN));
$inputCommands = fgets(STDIN);
$strArr = explode(',', $inputCommands);

function trim_value(&$value){
    $value = trim($value);
}

array_walk($strArr, 'trim_value');

for($i = 0; $i < count($strArr); $i++){
   $operation = $strArr[$i];

   if($operation == 'chop'){
      $inputNum /= 2;
      echo "$inputNum\n";

    } else if($operation == 'dice'){
       $inputNum = sqrt($inputNum);
       echo "$inputNum\n";

   } else if($operation == 'spice'){
       $inputNum += 1;
       echo "$inputNum\n";

   } else if($operation == 'bake'){
       $inputNum *= 3;
       echo "$inputNum\n";

   } else if($operation == 'fillet'){
       $percentage = ($inputNum * 20) / 100;
       $inputNum -= $percentage;
       echo "$inputNum\n";
   }
}

