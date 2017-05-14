<?php
    include "config.php";
    include "models/user.php";

    session_start();

    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE ) {
        header("Location: admin.php");
    }

    if (isset($_POST["email"])) {
        $error = "";
        if (empty($_POST["email"]) || empty($_POST["pass"])) {
            $error = "Credentials required.";
        }

        if (empty($error)) {
            $salt = PASS_SALT;
            $pass = crypt($_POST["pass"], $salt);
            $user = getUserByEmail($_POST["email"]);

            if ($user && ($pass === $user['password'])) {
                $_SESSION['isLogged'] = TRUE;
                $_SESSION['email'] = $user["email"];
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


<ul>
    <li><a href="signup.php">SignUp</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="index.php">Home</a></li>
</ul>

<form method="POST">
    <input type="email" name="email" placeholder="Email"/><br>
    <input type="password" name="pass" placeholder="Password"/><br>
    <input type="submit" value="Submit"/><br>
</form>
