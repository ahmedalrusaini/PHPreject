<?php 
session_start();
$_SESSION["ID"] = 1004;
$_SESSION["username"] = $_REQUEST["username"];
$_SESSION["password"] = $_REQUEST["password"];
header("Location: " . "session.php");
?>