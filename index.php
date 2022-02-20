<?php

function autoloader($class)
{
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)) {
        require_once $file;
    }
    
}
spl_autoload_register('autoloader');

$employeeAnd = new Employee(25, 'male', 'Andrii', 5600);
$employeeAnd->setAge(35);
$employeeVas = new Employee(42, 'male', 'Vasil', 8000);
$employeeVas->setSalary(25252);
echo $employeeAnd->getPerson();
echo $employeeVas->getPerson();
