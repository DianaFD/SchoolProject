<?php
    require "configs/config.php";
    require "configs/routes.php";


    if (!empty($_SERVER['REQUEST_URI'])) {
      $url = $_SERVER['REQUEST_URI'];
      $page = str_replace('index.php/','',$url);
    }

    if (array_key_exists($page, $routes)) {
        $class = $routes[$page]["class"]; // "Articles"
        $method = $routes[$page]["method"]; // "getAll"

        $methodReq = $_SERVER["REQUEST_METHOD"];

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


        require "controllers/".$class.".php";
        $controller = new $class();
        $response = $controller->$method();
        echo json_encode($response);
    }

    else {
        http_response_code(404);
        echo "Page not found.";
    }
