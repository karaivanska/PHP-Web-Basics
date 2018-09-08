<?php
/*Write a function isPalindrome
to check a string for symmetry.*/

function isPalindrome($word1){
    $word2 = strrev($word1);

    if($word1 == $word2){
        return 'true';
    } else {
        return 'false';
    }
};
echo isPalindrome('xyz')."\n";
//echo isPalindrome('anna')."\n";
//echo isPalindrome('abcccba')."\n";


