<?php
/*
Define a class Employee that holds the following information:
name, salary, position, department, email and age. The name,
salary, position and department are mandatory while the rest
are optional. Your task is to write a program which takes N
lines of employees from the console and calculates the department
with the highest average salary and prints for each employee in
that department his name, salary, email and age – sorted by salary
in descending order. If an employee doesn’t have an email – in
place of that field you should print “n/a” instead, if he doesn’t
have an age – print “-1” instead. The salary should be printed to
two decimal places after the seperator.
 */

class Employee
{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    function __construct(string $name, float $salary, string $position, string $department, string $email, float $age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getDepartment(): string
    {
        return $this->department;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): float
    {
        return $this->age;
    }
}

$n = intval(trim(fgets(STDIN)));
$employees = array();

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", trim(fgets(STDIN)));
    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $department = $input[3];
    $email = "n/a";
    $age = floatval(-1);

    if (isset($input[4])) {
        if (is_numeric($input[4])) {
            $age = floatval($input[4]);
        } else {
            $email = $input[4];
        }
    }
    if (isset($input[5])) {
        if (is_numeric($input[5])) {
            $age = floatval($input[5]);
        }
    }
    $employee = new Employee($name, $salary, $position, $department, $email, $age);
    array_push($employees, $employee);
}
$departments = [];

foreach ($employees as $employee) {
    if (array_key_exists($employee->getDepartment(), $departments)) {
        $departments[$employee->getDepartment()]++;
    } else {
        $departments[$employee->getDepartment()] = 1;
    }
}
$averageSalaries = [];

foreach ($departments as $department => $count) {
    $averageSalary = 0;
    foreach ($employees as $employee) {
        if ($employee->getDepartment() == $department) {
            $averageSalary += $employee->getSalary();
        }
    }
    $averageSalary /= $count;
    $averageSalaries[$department] = $averageSalary;
}
$highestDepartment = array_search(max($averageSalaries), $averageSalaries);

function orderBySalary($a, $b)
{
    return $a->getSalary() < $b->getSalary();
}

usort($employees,"orderBySalary");
echo "Highest Average Salary: {$highestDepartment} \n";

for ($i = 0; $i < count($employees); $i++) {
    if ($employees[$i]->getDepartment() == $highestDepartment) {
        if ($i != count($employees) - 1) {
            echo $employees[$i]->getName() . ' ' . number_format($employees[$i]->getSalary(), 2) . " " . $employees[$i]->getEmail() . ' ' . $employees[$i]->getAge() . PHP_EOL;
        } else {
            echo $employees[$i]->getName() . ' ' . number_format($employees[$i]->getSalary(), 2) . " " . $employees[$i]->getEmail() . ' ' . $employees[$i]->getAge();
        }
    }
}
