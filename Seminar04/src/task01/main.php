<?php

require('../../vendor/autoload.php');

use App\Code\task01\Employee;
use App\Code\task01\Functions;

$employees = [new Employee("Олег", 25, 1000.0), new Employee("Мария", 26, 2000.0)];

echo "Total salary: " . Functions::sumSalary($employees) . PHP_EOL;
var_dump(Functions::findOlder($employees));