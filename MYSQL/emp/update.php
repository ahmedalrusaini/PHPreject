<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="projectphpdb";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
?>
<?php


if (isset($_REQUEST["btnupdate"])){
    
    $id = $_REQUEST["ID"];
    $name = $_REQUEST["NAME"];
    $phone = $_REQUEST["PHONE"];
    $email = $_REQUEST["EMAIL"];
    
    $sql="UPDATE `emp` SET `NAME` = '{$name}',`PHONE` = '{$phone}',`EMAIL` = '{$email}' WHERE `ID` = $id";
    
    
    if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
        echo "updated :".mysqli_affected_rows($conn);
        header("Location: " . "read.php");
    }else {
        echo "error updated<br>Error:".mysqli_error($conn).":".mysqli_affected_rows($conn);
    }
    
    
}

?>
<?php 
if (isset($conn)){
    mysqli_close($conn);
}
?>