<?php

class Life {
    public $name; 
    protected $age = 0;
    protected $gender;
    
    function __construct($gender) {
        $this->gender = $gender;            
    }
    
    // public getter function
    function getAge() {
        return $this->age;
    }
    
    function printInfo() {
        echo "Name = " . $this->name .
            " Age = " . $this->age .
            " Gender = " .$this->gender;
    }
}


