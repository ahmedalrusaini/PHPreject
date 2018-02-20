<?php
$hostname="localhost";
$username="reem";
$password="";
$dbname="projectphpdb";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {//die stop conn
    die("Connection failed :".mysqli_connect_error()." No. :".mysqli_connect_errno());
    
}else {
    //echo "Connected!"."<br>";
}
?>
<?php
$query="SELECT * FROM `jobs` WHERE ID = 4";
$result=mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0) {
    
    echo "<h1>Jobs_Info<br>--------------------(Connected!)</h1>";
    while ($row= mysqli_fetch_array($result)){
        echo "<br>"."ID:".$row[0]."-NAME:".$row["NAME"];
        
        echo "<br>";
        echo "<pre>";
        print_r($row);
        echo "<pre>";
    }
}else {
    echo "No rows";
}
?>
<?php 
mysqli_free_result($result);
mysqli_close($conn);
?>