<?php 
session_start();
$_SESSION["ID"] = 1004;
header("Location: " . "session.php");
?>