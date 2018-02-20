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
$id = 5;
$col = "name";
$val = "Reem";
    
$sql="UPDATE `jobs` SET {$col} = '{$val}' WHERE ID = ".$id;
if (mysqli_query($conn, $sql)) {
    echo "updated";
}else {
    echo "error updated<br>Error:".mysqli_error($conn);
}
?>
<?php 
mysqli_close($conn);
?>