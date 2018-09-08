<?php

class Worker extends Human
{
    private $weekSalary;
    private $workHoursPerDay;

    public function __construct($firstName, $lastName, $weekSalary, $workHoursPerDay)
    {
        parent::__construct($firstName, $lastName);
        $this->setSalary($weekSalary);
        $this->setWorkingHours($workHoursPerDay);
    }

    private function setSalary($weekSalary)
    {
        if ($weekSalary < 10) {
            throw new Exception('Expected value mismatch!Argument: weekSalary');
        }

        $this->weekSalary = $weekSalary;
    }

    private function setWorkingHours($workHoursPerDay)
    {
        if ($workHoursPerDay < 1 or $workHoursPerDay > 12) {
            throw new Exception('Expected value mismatch!Argument: workHoursPerDay');
        }

        $this->workHoursPerDay = $workHoursPerDay;
    }

    private function getSalaryPerHour()
    {
        return ($this->weekSalary / 7) / $this->workHoursPerDay;
    }

    public function __toString()
    {
        $output = "First Name: " . $this->firstName . "\n";
        $output .= "Last Name: " . $this->lastName . "\n";
        $output .= "Week Salary: " . number_format($this->weekSalary, 2) . "\n";
        $output .= "Hours per day: " . number_format($this->workHoursPerDay, 2) . "\n";
        $output .= "Salary per hour: " . number_format($this->getSalaryPerHour(), 2);

        return $output;
    }

    public function getSalary()
    {
        return $this->weekSalary;
    }

    public function getWorkingHours()
    {
        return $this->workHoursPerDay;
    }
}