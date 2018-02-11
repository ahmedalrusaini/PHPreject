<?php 
$v1 = 1;
$v2 = 2.5;
$v3 = "Qassim";
$v4 = FALSE;
$v5 = array(1,2);

// gettype

echo gettype($v1);
echo "<br>";

echo gettype($v2);
echo "<br>";

echo gettype($v3);
echo "<br>";

echo gettype($v4);
echo "<br>";

echo gettype($v5);
echo "<br>";

// settype

//convert v1 from int to double
//تحويل نوع المتغير الاول من انتجر الى دبل
settype($v1, "double");
echo gettype($v1);
echo "<br>";
//convert v1 from double to string like java
//تحول نوع المتغير الاول من دبل الى سترنق ,مثل جافا
$v1 = (string)$v1;
echo gettype($v1);
echo "<br>";

// var_dump

var_dump($v1);
echo "<br>";
var_dump($v2);
echo "<br>";
var_dump($v3);
echo "<br>";
var_dump($v4);
echo "<br>";
echo "<pre>";
var_dump($v5);
echo "<pre>";
echo "<br>";

?>