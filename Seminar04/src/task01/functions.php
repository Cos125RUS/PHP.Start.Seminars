<?php

namespace App\Code\task01;

class Functions
{
    public static function sumSalary(array $employees) : float
    {
        $sum = 0.0;

        foreach ($employees as $employee) {
            $sum += $employee->getSalary();
        }

        return $sum;
    }

    public static function findOlder(array $employees) : Employee
    {
        $older = $employees[0];
        foreach (array_slice($employees, 1) as $employee) {
            if ($employee->getAge() > $older->getAge()) {
                $older = $employee;
            }
        }
        return $older;
    }
}