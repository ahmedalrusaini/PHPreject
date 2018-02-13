<?php 
session_start();
if (!isset($_SESSION["ID"])){
    //if the person is not login we will redirect it to login page .
    header("Location: " . "../login.php");
}
?>
<?php
echo $_SESSION["person"];
?>

<button onclick="javascript:window.location.href='logout.php'">Logout</button>