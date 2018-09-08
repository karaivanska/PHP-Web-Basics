<?php
/*
ou will be given a single string, containing random ASCII
character. Your task is to print every character,
and how many times it has been used in the string.
 */

$string = "The quick brown fox jumps over the lazy dog";
$newStrArr = [];
$str = strtoupper($string);

for($i = 0; $i < strlen($str); $i++){
    $char = $str[$i];

    if($char >= 0 && $char <= 127){
        if(isset($newStrArr[$char])){
            $newStrArr[$char]++;
        } else {
            $newStrArr[$char] = 1;
        }
    }
}

print_r($newStrArr);