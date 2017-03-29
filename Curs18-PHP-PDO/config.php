<?php  
  // Activate php errors & warnings
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  
  
  //DB Config
  $host   = getenv('IP');
  $user   = getenv('C9_USER');
  $pass   = '';
  $dbName = 'blog';
  
  const PASS_SALT = '$1$12ab!';
    