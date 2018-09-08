<?php
/*
Create a class DateModifier which stores the difference of the days between
two Dates. It should have a method which takes two String parameters representing
a date as Strings and calculates the difference in the days between them.
 */

class Dates{
    private $starDate;
    private $endDate;

   public function __construct($startDate, $endDate)
    {
        $this->starDate=$startDate;
        $this->endDate=$endDate;
    }

    public function getDate($startDate, $endDate)
    {
        $start = strtotime("$startDate");
        $end = strtotime("$endDate");
        $datediff = $start - $end;

        return abs(round($datediff / (60 * 60 * 24)));
    }
}
$result = 0;

$date1 = trim(fgets(STDIN));
$date2 = trim(fgets(STDIN));

$date = new Dates($date1, $date2);
echo $date->getDate($date1, $date2);
