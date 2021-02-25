<?php

class Worker_pr{

    private $name;
    private $age;
    private $salary;

    private function checkAge($age){
        if($age > 1 & $age < 100){
            return $this->age = $age;
        }
        return 0;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->checkAge($age);
    }

    public function getAge(){
        return $this->age;
    }

    public function setSalary($salary){
        return $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    

}