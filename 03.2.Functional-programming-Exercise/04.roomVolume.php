<?php
/*
Write a script roomVolume.php, which calculates the volume of the
rooms in an apartment. Use array_map() built-in function to do this.
 */

$room = [
    'kithen'      => ['width'=> 3,'length'=>2, 'height' => 2.4],
    'living_room' => ['width'=> 6,'length'=>4, 'height' => 2.4],
    'bedroom'     => ['width'=> 5,'length'=>3, 'height' => 2.2],
];

function calc($room){
    $width = $room['width'];
    $length = $room['length'];
    $height = $room['height'];

    return $width * $height * $length;
}

$output = array_map('calc', $room);
print_r($output);