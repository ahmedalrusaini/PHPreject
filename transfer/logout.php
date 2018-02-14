<?php 
session_start();

//session_destroy();
$_SESSION["ID"] = NULL;

header("Location: " . "../login.php?msg1=the logout is done .");
?>