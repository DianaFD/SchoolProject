<?php

  // Activate php errors & warnings
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //DB Config
  define("DBHOST", 'localhost');
  define("DBUSER", 'root');
  define("DBPASS", 'toor');
  define("DBNAME", 'Blog');

  const PASS_SALT = '$1$12ab!';
