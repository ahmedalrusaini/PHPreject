<?php
$hostname="localhost";
$username="reem";
$password="";
$dbname="projectphpdb";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed :".mysqli_connect_error()." No. :".mysqli_connect_errno());
}
?>
<?php

$name = "MIS";
    
$sql="INSERT INTO `jobs`(`name`) VALUES ('$name')";
if (mysqli_query($conn, $sql)) {
    echo "inserted";
}else {
    echo "error inserted<br>Error:".mysqli_error($conn);
}
?>
<?php 
mysqli_close($conn);
?>