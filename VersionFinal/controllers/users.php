<?php
    session_start();

    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE ) {
        header("Location: admin.php");
    }

    include "include/config.php";

    if (isset($_POST["email"])) {
        $error = "";
        if(empty($_POST["email"]) || empty($_POST["pass"])) {
            $error = "Empty credentials.";
        } elseif ($_POST["pass"] !== $_POST["repass"]) {
            $error = "Invalid credentials.";
        }

        if (empty($error)) {
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
