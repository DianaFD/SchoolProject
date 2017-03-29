<?php 
    // Implement this Google Car class and test it to have results on screen 
    class GoogleCar {
        
        // speed cannot be higher than 120km/h
        private $speed;
        // passengers cannot be more than 5
        private $passengers;
        
        function __construct($speed =0 , $passengers = 0) {
            $this->speed = $speed;
            $this->passengers = $passengers;
         }
    }
        function setSpeed($speed) {
            if ($speed <= 120 km/h) {
            $this->speed=$speed;
                }
            }
            
        $ = new Speed("115 km");    
            
       function setPassengers($passengers) {
           if ($passengers <= 5) {
               $this->passengers = $passengers;
           }
       }

        
        // must increase the speed of the car
        function increaseSpeed($speed) {
            for ($i =0; $i< speed; $++) {
            
            }
        
        // must decrease the speed of the car
        function decreaseSpeed() {
        //   
        }
        
        function getSpeed() {
        }
       
        // returns a boolean
        function isStopped() {
           $this->isStopped = true;
        }
        
        
        // if over 90km/h
        function isOverLimit() {
            $this->isOverLimit > "90 km/h";
            
            
        }
        
        function addPassengers() {
        //
        }
        
        function removePassangers() {
        //
        }
        
        function getPassengersNumber() {
        //
        }
        
        // between 0 - 50 > 1
        // between 51- 99 > 2
        // between 100 - 120 > 3
        function getGear() {

        }
    }
    
 