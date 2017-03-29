<?php


//APP CONFIGS
require 'app/configs/config.php';


//DB MODEL FOR ARTICLES
 require "app/models/Articles.php";
 $articles= new Articles ();
 $list=$articles->getAll ();
 
 print_r($list);
 
 require "app/models/Comments.php";
  $comments= new Comments ();
  $list=$comments->getAll ();
  
  print_r($list);
 ?>
  




