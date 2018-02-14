<?php 
session_start();
if (!isset($_SESSION["ID"])){
    //if the person is not login we will redirect it to login page .
    header("Location: " . "../login.php?msg1=you are not login&msg2= ,please login.");
}
?>
<?php
echo "<br>" . $_SESSION["person"];
echo "<br>" . $_SESSION["username"];
?>
<br>
<button onclick="javascript:window.location.href='logout.php'">Logout</button>