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

if (isset( $_REQUEST["id"] )){
    $id = $_REQUEST["id"];
$sql="DELETE FROM `jobs` WHERE ID = ".$id;
if (mysqli_query($conn, $sql)) {
    echo "deleted";
}else {
    echo "error deleted<br>Error:".mysqli_error($conn);
}
}
?>
<?php 
if (isset($conn)){
mysqli_close($conn);
}
header("Location: " . "readTable.php");
?>