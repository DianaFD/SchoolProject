<?php
  // Activate php errors & warnings
  error_reporting(E_ALL);
  ini_set('display_errors', 1);


  //DB Config
  $host   = 'localhost';
  $user   = 'root';
  $dbName = 'Blog';
  $pass = 'toor';

  const PASS_SALT = '$1$12ab!';
