<?php

class Student extends User{

    private $scholarship;
    private $course;

    
    public function setCourse($course){
        $this->course = $course;
    }

    public function getCourse(){
        return $this->course;
    }

    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }

    public function getScholarship(){
        return $this->scholarship;
    }
}