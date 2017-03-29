<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

 session_start();
 
 // isset - Check if if session count has value
 if (isset($_SESSION['count'])) {
    $_SESSION['count']++;    
 } else {
    $_SESSION['count'] = 1;
 }
 
 echo $_SESSION['count'];
 
 
 unset($_SESSION['count']);
 session_destroy();
 
 echo $_SESSION['count'];