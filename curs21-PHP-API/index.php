<?php

    
    require "app/configs/config.php";
    require "app/configs/routes.php";
    
    const BLOG = '/curs21-PHP-API';
    
    if (!empty($_SERVER['REDIRECT_URL'])) {
    $url = $_SERVER['REDIRECT_URL'];
    $page = str_replace(BLOG,'',$url);
    
    
    if (array_key_exists($page, $routes)) {
        $class = $routes[$page]["class"]; // "Articles"
        $method = $routes[$page]["method"]; // "getAll"
        
        
        echo $methodReq = $_SERVER["REQUEST_METHOD"];
        switch($methodReq) {
            case "POST":
                $content = file_get_contents("php://input");
                $data = json_decode($content, true);
                if ($data) {
                $_POST = $data;
                }
                break;
                
            case "PUT":
                echo $content = file_get_contents("php://input");
                $data= json_decode($content, true);
                
                if ($data) {
                    $PUT=$data;
                } else {
                    parse_str($content, $REQUEST);
                }
                
                break;
            case "DELETE":
                break;
        }
        
        //print_r($PUT);
        //exit;
        
        require "app/controllers/".$class.".php";
        $controller = new $class();
        $response = $controller->$method();
        
        //RESPONSE FOR JS
        header("Content-Type: application/json");
        //ne face encodarea pentru codul de pe liania 20
        //json_encode returneaza un string
        echo json_encode($response);  //[{"id":"0","title":"Test Title","content":"Tralala","category_id":"1","main_image_url":null,"user_id":"1","published":"0","creation_date":"2017-03-08 16:46:25","last_modified":null}
        
    } else {
        http_response_code(404);
        echo "Page not found.";
    } 
    
    } else {
        http_response_code(403);
        echo "Access Forbidden.";
    }

    
    

 
 