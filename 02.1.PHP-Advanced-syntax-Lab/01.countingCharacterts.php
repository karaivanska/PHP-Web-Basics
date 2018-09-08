<?php
/* Write a program that reads some text and
counts the occurrences of each character in it.
Print the results.*/

$inputStr = "Hello";
$newArr = [];
$inputStr = strtoupper($inputStr);

for($i = 0; $i < strlen($inputStr); $i++){
   $char = $inputStr[$i];

   if(ord($char) >= ord('A') && ord($char) <= ord('Z')){
       if(isset($newArr[$char])){
           $newArr[$char]++;
       } else {
           $newArr[$char] = 1;
       }
   }
}

print_r($newArr);

