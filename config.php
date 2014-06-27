<?php 
 $base_url = "evolucionar/";  
 $base_url = str_replace($base_url,"",$_SERVER['REQUEST_URI']); 
 $current_uri = explode("/",$base_url); 

 if(empty($current_uri[1])){
   define('CURRENT_PAGE','home'); 
   define('CURRENT_FILE','home.php'); 
 }else{
   define('CURRENT_PAGE',$current_uri[1]);	 
   define('CURRENT_FILE',$current_uri[1].".php");
 }
?>