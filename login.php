

<?php 
echo "<ul>";
if (isset( $_REQUEST["msg1"] )){
    echo "<li>" . $_REQUEST["msg1"] . "</li>";
}
if (isset( $_REQUEST["msg2"] )){
    echo "<li>" . $_REQUEST["msg2"] . "</li>";
}
echo "</ul><br>";
?>


<form action="transfer/createIDsession.php" method="GET">
<br><input name="username" type="text" placeholder="enter username.." />
<br><input name="password" type="password" placeholder="enter password" />
<br><button type="submit" name="login">Login</button>
</form>
