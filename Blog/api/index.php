 <?php
   
    session_start();
    require "db.php"; 
    require "configs/config.php";
    require "configs/routes.php";
    

    const BLOG = '/api';
   
    if (!empty($_SERVER['REDIRECT_URL'])) {
       $url = $_SERVER['REDIRECT_URL'];
       $page = str_replace(BLOG,'',$url);
        
        if (array_key_exists($page, $routes)) {
            $class = $routes[$page]["class"]; //users
            $method = $routes[$page]["method"]; //updateUser

            //Recuperare date JSON
            $methodReq = $_SERVER["REQUEST_METHOD"];
            
            switch($methodReq){
                
                case "POST":
                    $content = file_get_contents("php://input");
                    $data = json_decode($content, true);
        
                    if ($data) {
                        $_POST = $data;
                    }
                    
                break;
                case "PUT":
                case "DELETE":
                    $content = file_get_contents("php://input");
                    $data = json_decode($content, true);
                    if($data){
                        $REQUEST = $data;
                    }else{
                        parse_str($content,$REQUEST);
                    }
                    break;
            }
            require "controllers/". $class .".php";
            $controller = new $class();
            $response = $controller->$method();
            
            echo json_encode($response);

        } else {
            http_response_code(404);
            echo "Page not found.";        
        }
    } else {
        http_response_code(403);
        echo "Access Forbidden.";
    }
    
?>