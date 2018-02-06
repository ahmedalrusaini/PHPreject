<?php 
$name = "Qassim";// java:String name = "Qassim";
echo $name;
echo "<br>";

$age = 15; // java:int age = 15;
echo $age;
echo "<br>";
$age = 1 + 2 ;
echo $age;
echo "<br>";
$age = $age + 2 ;
echo $age;
echo "<br>";

$salary = 15000.9;
echo '1' . $salary; // System.out.println(str1 + str2);
//عباره عن جمع نصوص عند إستخدام نقطع
echo "<br>";
echo '1' + $salary;
//عباره عن عملية جمع قيمتين
?>

<?php 

$num1 = 10;
$num2 = 2;

echo "<br>";
echo $num1 + $num2;
echo "<br>";
echo $num1 - $num2;
echo "<br>";
echo $num1 / $num2;
echo "<br>";
echo $num1 * $num2;

/*
  1- ()
  2- * /
  3- + -
 */

echo "<br>";
echo  1 + 2 * 3; // = 7
echo "<br>";
echo ( 1 + 2 ) * 3; // = 9
?>

<?php
$logic = FALSE;

echo "<br>";
if ($logic == TRUE){
    echo "the logic is true";
}else {
    echo "the logic is false";
}

?>
