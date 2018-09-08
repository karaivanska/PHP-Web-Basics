<?php
/*
Write a function that determines whether a driver is within the speed limit.
You will receive his speed and the area where he’s driving.
Each area has a different limit: on the motorway the limit is 130 km/h, on the
interstate the limit is 90, inside a city the limit is 50 and within a residential
area the limit is 20 km/h. If the driver is within the limits, your function prints nothing.
If he’s over the limit however, your function prints the severity of the infraction.
For speeds up to 20 km/h over the limit, he’s speeding; for speeds up to 40 over the limit,
the infraction is excessive speeding and for anything else, reckless driving.
The input comes in two rows. On the first row you will receive the current speed
as a string and needs to be parsed as a number. On the second row you will be given
the second element which is  the area.
The output should be printed to the console. Note in certain cases there will be no output.
 */

$speed = intval(trim(fgets(STDIN)));
$zone = trim(fgets(STDIN));
$overSpeed = '';

function getLimit($speed, $zone, &$overSpeed)
{
    if ($zone == 'motorway') {
        return getInfraction($speed, 130, $overSpeed);
    } else if ($zone == 'interstate') {
        return getInfraction($speed, 90, $overSpeed);
    } else if ($zone == 'city') {
        return getInfraction($speed, 50, $overSpeed);
    } else if ($zone == 'residential') {
        return getInfraction($speed, 20, $overSpeed);
    } else {
        return 'Not Valid Input';
    }
}
function getInfraction($speed, $speedLimit, &$overSpeed)
{
    $overSpeed = $speed - $speedLimit;

    if ($overSpeed >= 0 && $overSpeed < 20) {
        $overSpeed = 'speeding';

    } else if ($overSpeed >= 20 && $overSpeed < 40) {
        $overSpeed = 'excessive speeding';

    } else if ($overSpeed >= 40) {
        $overSpeed = 'reckless driving';

    } else if ($overSpeed < 0) {
        $overSpeed = '';
    }
    return $overSpeed;
}

$speedy = getLimit($speed, $zone, $overSpeed);
print($overSpeed);
