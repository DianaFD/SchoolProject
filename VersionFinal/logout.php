<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION["isLogged"]);

   header("Location: index.php");
?>
