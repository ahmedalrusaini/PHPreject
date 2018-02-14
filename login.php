<?php 
if (isset( $_REQUEST["msg1"] )){
    echo $_REQUEST["msg1"];
}
echo "<br>";
if (isset( $_REQUEST["msg2"] )){
    echo $_REQUEST["msg2"];
}
echo "<br>";
?>
<form action="transfer/createIDsession.php" method="GET">
<br><input name="username" type="text" placeholder="enter username.." />
<br><input name="password" type="password" placeholder="enter password" />
<br><button type="submit" name="login">Login</button>
</form>
