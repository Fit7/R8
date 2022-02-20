<?php

class Employee implements IEmployee {
    
    private $age;
    private $gender;
    private $name;
    private $salary;
   

    public function __construct(int $age, string $gender, string $name,int $salary) {
        $this->age = $age;
        $this->gender = $gender;
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getAge(): int 
    {
        return $this->age;
    }

    public function getGender(): string 
    {
        return $this->gender;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getSalary(): int 
    {
        return $this->salary;
    }

    public function setAge(): int 
    {
        return $this->age = func_get_arg(0);
    }

    public function setGender(): string 
    {
        return $this->gender = func_get_arg(0);
    }

    public function setName(): string 
    {
        return $this->name = func_get_arg(0);
    }

    public function setSalary(): int 
    {
        return $this->salary = func_get_arg(0);
    }
    
    public function getPerson(): string 
    {
        return "<hr><b>User: {$this->name}</b><br>
                Age: {$this->age}<br>
                Gender: {$this->gender}<br>
                Salary: {$this->salary}<br>";    
    }

}
