<?php
// Activate php errors & warnings
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

class Human {
    public $name; 
    private $age = 0;
    public $isDancing = TRUE;
    private $gender;
    
    function __construct($gender){
        $this ->gender=$gender;
        
    }
    //function getter function
    function getAge(){
        return $this->age;
    }
    //public setter function 
    function setAge($age) {
    if ($age > 10 && $age<30) {    
    $this->age = $age;
    } 
    
        
    }
    
    function printHuman() {
        return "HUMAN = " . $this->name . " is " . 
                $this->age . " old and is dancing " . 
                $this->isDancing;
    }
    
    private function myPrivate() {
        echo "My private function";
    }
    
}


$human1 = new Human("F");
$human1->name = "Ana";
var_dump($human1);
echo $human1->name;
//echo $human1->age; private acces
echo "age=" . $human1->getAge();

$human1-> setAge(25);
echo "new age = " . $human1->getAge();
$human1-> setAge(50);
echo "new age 2= " . $human1->getAge();
$human1->setAge(15);
echo "new age 3= " .$human1->getAge();
echo $human1->printHuman();

$human2 = new Human("M");
$human2->name = "Paul";
echo $human2->printHuman();
var_dump($human2);

class Car {
    private $model;
    public $color;

    function __construct($model, $color){
        $this->$model = $model;
        $this->$color= $color;
    }

    function printCar() {
    echo "Model" . $this-> model . "color = " >$this->color;
     
    }
 }

$dacia= new Car("dacia", "pink");
$dacia->printCar();
$dacia->color="purple";