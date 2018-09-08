<?php
/*
Write a program that receives a list of username-password pairs
in the format “username -> password”. If there’s already a user
with that username, replace their password. After you receive
the command “login”, login requests start coming in, using the
same format. Your task is to print the status of user login, using
different messages as per the conditions below:
•	If the password matches with the user’s password, print
“username: logged in successfully”.
•	If the user doesn’t exist, or the password doesn’t match the user, print
“username: login failed”.
When you receive the command “end”, print the count of unsuccessful
login attempts, using the format “unsuccessful login attempts: count”.
 */

$input = trim(fgets(STDIN));
$usersData = [];
$unsuccessfulLogins = 0;

while ($input != 'login') {
    $args = explode(' -> ', $input);
    $username = trim($args[0]);
    $password = trim($args[1]);

    if (!array_key_exists($username, $usersData)) {
        $usersData[$username] = $password;
    } else {
        $usersData[$username] = $password;
    }

    $input = trim(fgets(STDIN));
}

$input = trim(fgets(STDIN));

while ($input != 'end') {
    $args = explode(' -> ', $input);
    $username = trim($args[0]);
    $password = trim($args[1]);

    if (!array_key_exists($username, $usersData) || $usersData[$username] != $password) {
        echo "$username: login failed\n";
        $unsuccessfulLogins++;
    } else {
        echo "$username: logged in successfully\n";
    }
    $input = trim(fgets(STDIN));
}

echo "unsuccessful login attempts: $unsuccessfulLogins";



