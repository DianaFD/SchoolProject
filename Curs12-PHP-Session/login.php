<?php
    session_start();
  
  if (!isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE) {
     header("Location: admin.php");
 }



    include "include/config.php";
    
    function readUser($email, $pass) {
        $handle = fopen("users.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $user = explode(" ", trim($line));
                if ($email === $user[0] && $pass === $user[1]) {
                    return $user;
                }
            }
            fclose($handle);
            return FALSE;
        } 
    }
    
    if (isset($_POST["email"])) {
        $error = "";
        if (empty($_POST["email"]) || empty($_POST["pass"])) {
            $error = "Credentials required.";    
        }
        
        if (empty($error)) {
            $salt = '$1$12ab!';
            $pass = crypt($_POST["pass"], $salt); 
             
            $user = readUser($_POST["email"], $pass);
            if ($user !== FALSE) {
                $_SESSION['isLogged'] = TRUE;
                $_SESSION['email'] = $user[0];
                
                header("Location: admin.php");
            } else {
                $error = "Invalid credentials.";
            }
        } 
        
        if (!empty($error)) {
            echo $error;
        }
    }
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email"/><br>
    <input type="password" name="pass" placeholder="Password"/><br>
    <input type="submit" value="Submit"/><br>
</form>