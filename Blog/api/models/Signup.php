<?php

    include "config.php";
    include "models/users.php";
    
    session_start();
    
    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE ) {
        header("Location: admin.php");    
    }
    
    if (isset($_POST["email"])) {
     
        $error = "";
        if(empty($_POST["email"]) || empty($_POST["pass"])) {
            $error = "Empty credentials.";
        } elseif ($_POST["pass"] !== $_POST["repass"]) {
            $error = "Invalid credentials.";
        }
        
        if (empty($error)) {
            $email = $_POST["email"];
            
            // Crypt password before save
            $salt = PASS_SALT;
            $pass = crypt($_POST["pass"], $salt);
            
            
            
            //we will save the user into the database
            $result = save_user($_POST["email"], $pass);
            
            if ($result > 0) {
                echo "User with email $email wass successfully created!";
            } else {
                echo "Unable to create user... pls try again later!";
            }
        }
        else {
            echo $error;
        }
        
        
    }
?>