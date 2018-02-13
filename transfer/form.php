<?php 
//for example we are reed the ID=1004 from DB
$ID = 1004;
?>
<form action="formSubmit.php" method="GET">
<input type="hidden" name="ID" value="<?php echo "$ID";?>"  />
<br>NAME:<input type="text" name="username" />

<br>gender:
<br>female:<input type="radio" name="gender" value="female" />
<br>male:<input type="radio" name="gender" value="male" />

<br><button type="submit" name="issetEvent">1-Enter</button>
<br><button type="submit" name="hello">2-hello</button>
</form>