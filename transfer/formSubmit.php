<?php 

if (isset( $_GET["issetEvent"] )){
    
    
    
    $name = $_GET["username"];
    if (empty($name)){
        echo "Sorry";
    } else {
        echo $name;
    }
 
    
}






?>