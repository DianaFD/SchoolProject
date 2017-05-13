<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    define("DBHOST", getenv('IP'));
    define("DBUSER", getenv('C9_USER'));
    define("PASS", '');
    define("DBNAME", 'blog');
    
    const PASS_SALT= '$1$12ab!';