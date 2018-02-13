<?php 

if (isset( $_GET["issetEvent"] )){
    
    $ID = $_REQUEST["ID"];
    echo "<br>ID :{$ID}";
    
    $gender = $_REQUEST["gender"];
    echo "<br>gender :{$gender}";
    
    $name = $_GET["username"];
    if (empty($name)){
        echo "Sorry";
    } else {
        echo "<br>name:" . $name;
    }
 
}


if ( isset( $_REQUEST["hello"] ) ){
    echo "Hello world! java .";
}
?>