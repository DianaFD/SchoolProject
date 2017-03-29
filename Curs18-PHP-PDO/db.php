<?php
    require_once('config.php');
    
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);    
    } catch (PDOException $e) {
        
        echo 'DB ERROR PLS CONTACT ADMIN';
        die();
    }