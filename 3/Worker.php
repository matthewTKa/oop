<?php

class Worker_3 extends User{

    private $salary;

    
    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }


}