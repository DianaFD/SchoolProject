<?php

echo "Hello POSTMAN";

// echo "<pre>";
// print_r($_SERVER);

$method = $_SERVER["REQUEST_METHOD"];

switch($method) {
    case "GET":
        print_r($_GET);
        break;
    case "POST":
        $content = file_get_contents("php://input");
        $data = json_decode($content, true);
        
        if ($data) {
            $_POST = $data;
        }
        
        print_r($_POST);
        break;
}






