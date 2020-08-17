<?php
 ob_start();
 session_start();
 //config file
 require_once "config.php";
 //include helper
 // require_once "helper/system_helper.php";
 //autoload
 function __autoload($class_name){
   require_once "lib/" . $class_name . ".php";
 }
?>