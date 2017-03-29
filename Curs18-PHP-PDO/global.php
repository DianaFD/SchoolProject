<?php

   $a = 1;
   
    function f1() {
       global $a;
       $a = 2;
    }
   
   function f2() {
       global $a;
       echo $a;
   }
   
   f2();