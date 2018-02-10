<?php 

$city = "paris";

echo $city;

echo "<br>";
echo strlen($city);

echo "<br>";
echo strtoupper($city);

echo "<br>";
echo strrev($city);

$city = "PARIS";
echo "<br>";
echo lcfirst($city);

$city = "paris london";
echo "<br>";
echo ucwords($city);

echo "<br>";
echo str_replace("r", "R",$city);

echo "<br>";
echo $city;


echo "<br>";
$city= "    A      B     ";
echo trim($city);


$str = " ahmed alrusaini";
echo "<br>" . strstr($str,"alrusaini");
echo "<br>" . str_replace("a","A",$str);
echo "<br>" . trim($str);

$phone = "00966565525661";

echo "<br>";
echo "*" . substr($phone, -3);

echo "<br>";
echo substr($phone, 7,7);

echo "<br>";
echo substr($phone, 7,2);

echo "<br>";
echo substr($phone, 0,4);


echo "<br>";
echo strlen($phone);












?>