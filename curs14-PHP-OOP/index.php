<?php
    // Activate php errors & warnings
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require "Human.php";
    require "Animal.php";
 
    $human = new Human("F");
    //var_dump($human);
    echo "Human age " . $human->getAge();
    $human->printInfo();
    echo "<br>";
    
    
    $animal = new Animal("M");
    //var_dump($animal);
    $animal->printInfo();
    
    