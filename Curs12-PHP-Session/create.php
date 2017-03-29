<?php
    // include
    // include_once
    // require
    // require_once
    
    session_start();
    
    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE ) {
        header("Location: admin.php");    
    }
    
    include "include/config.php";
    
    if (isset($_POST["email"])) {
        //print_r($_POST);
        //echo $_POST["email"];
        
        $error = "";
        if(empty($_POST["email"]) || empty($_POST["pass"])) {
            $error = "Empty credentials.";
        } elseif ($_POST["pass"] !== $_POST["repass"]) {
            $error = "Invalid credentials.";
        }
        
        if (empty($error)) {
            // Crypt password before save
            $salt = '$1$12ab!';
            $pass = crypt($_POST["pass"], $salt);
            
            echo $user = $_POST["email"] . " " . $pass. "\n";
            file_put_contents("users.txt", $user, FILE_APPEND);
           
        }
        else {
            echo $error;
        }
        
        
    }
?>


<ul>
    <li><a href="create.php">Create</a></li>
    <li><a href="login.php">Login</a></li>
</ul>

<form method="POST">
    <input type="email" name="email" placeholder="Email"/><br>
    <input type="password" name="pass" placeholder="Pass"/><br>
    <input type="password" name="repass" placeholder="Repass"/><br>
    <input type="submit" value="Submit"/>
</form>