<?php

namespace App\Code\task01;

class Employee
{
    protected string $name;
    protected int $age;
    protected float $salary;

    /**
     * @param string $name
     * @param int $age
     * @param float $salary
     */
    public function __construct(string $name, int $age, float $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public static function sumSalary(Employee $emp1, Employee $emp2): float
    {
        return $emp1->getSalary() + $emp2->getSalary();
    }
}