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

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setAge() {
        return $this->age = func_get_arg(0);
    }

    public function setGender() {
        return $this->gender = func_get_arg(0);
    }

    public function setName() {
        return $this->name = func_get_arg(0);
    }

    public function setSalary() {
        return $this->salary = func_get_arg(0);
    }
    
    public function getPerson() {
        return "<hr><b>User: {$this->name}</b><br>
                Age: {$this->age}<br>
                Gender: {$this->gender}<br>
                Salary: {$this->salary}<br>";    
    }

}
