<?php

// Recover GET request values
printArray($_GET);
echo $_GET["search"];

// Recover POST request values
printArray($_POST);
echo $_POST["name"];

printArray($_FILES);
echo $_FILES["file"]["name"];

$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
// Save infos ....


// Redirect to forms view
header("Location: forms.php");

function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";


//$file = $_FILES["file"];
//move_downloaded_file($file["tmp_name"], "downloads/" . $file["name"]);

}