<?php

    // $routes = array();
    
    // $routes['/articles/add'] = array ('class'=>"Articles", "method"=>"add");
    // $routes['/articles/update'] = array ('class'=>"Articles", "method"=>"update");
    // $routes['/comments/add'] = array ('class'=>"Comments", "method"=>"add");
    // $routes['/comments/list'] = array ("class"=> "Users", "method" => "listComments");
    // $routes['/users/login'] = array("class"=>"Accounts", "method"=>"login");
    // //$routes['/accounts/create'] = array( "class" => "Accounts", "method" => "createAccount");
    // $routes['/accounts/checkSession'] = array( "class" => "Accounts", "method" => "checkSession");
    // $routes['/accounts/logout'] = array("class"=>"Accounts", "method"=>"logout");

    $routes['/articles'] = array("class"=>"Articles", "method"=>"getAll");
    $routes['/articles/add'] = array("class"=>"Articles", "method"=>"createItem");
    $routes['/articles/edit'] = array("class"=>"Articles", "method"=>"editItem");
    $routes['/articles/delete'] = array("class"=>"Articles", "method"=>"deleteItem");
    $routes['/comments'] = array("class"=>"Comments", "method"=>"getAll");
    $routes['/comments/add'] = array("class"=>"Comments", "method"=>"createItem");
    $routes['/comments/delete'] = array("class"=>"Comments", "method"=>"deleteItem");
    $routes['/login'] = array("class"=>"Account", "method"=> "login");
    $routes['/logout'] = array("class"=>"Account", "method"=> "logout");
?>