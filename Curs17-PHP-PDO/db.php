<?php
    require_once('config.php');
    
    //   $dbh = new PDO('mysql:host='. $host . ';dbname=' . $dbName, $user, $pass);
    //   $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);    
    } catch (PDOException $e) {
        
        echo 'DB ERROR PLS CONTACT ADMIN';
        die();
    }