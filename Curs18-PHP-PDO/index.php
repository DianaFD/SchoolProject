<?php
    include "config.php";
    
    session_start();
    
    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE ) {
        header("Location: admin.php");    
    }
?>

<ul>
    <li><a href="signup.php">SignUp</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="index.php">Home</a></li>
</ul>