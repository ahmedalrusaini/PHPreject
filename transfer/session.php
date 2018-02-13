<?php 
session_start();
$name = "Arwa";
$_SESSION["person"] = $name;
?>

<button onclick="javascript:window.location.href='view.php'">Go To View</button>