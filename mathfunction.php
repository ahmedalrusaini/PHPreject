<?php 

$num1 = 9;
$num2 = 3;
$num3 = -2;
$num4 = -4.3;
$num5 = 4.3;

//abs القيمة المطلقة
echo abs($num1);
echo "<br>" . abs($num2);
echo "<br>" . abs($num3);
echo "<br>" . abs($num4);

//ceil
echo "<br>" . ceil($num4);
//floor
echo "<br>" . floor($num4);
//ceil
echo "<br>" . ceil($num5);
//floor
echo "<br>" . floor($num5);
//sqrt
echo "<br>sqrt {$num1} : " . sqrt($num1);


//decbin
echo "<br>" . decbin(10);
//dechex
echo "<br>" . dechex(10);
//decoct
echo "<br>" . decoct(10);
//base_convert(value 10, convertFrom dec:10, convertTo bin:2)
echo "<br>" . base_convert(10,10,2);

echo "<br>" . crypt("Ameera","abc");

echo "<br>" . md5("haifa");

echo "<br>" . sha1("Arwa");

//fmod << mod
echo "<br>" . fmod(5,2);
// << pow
echo "<br>" . pow(3,2);
// << rand
echo "<br>" . rand();
echo "<br>" . rand(1,20);//1 to 20
echo "<br>" . rand(00000,99999);//5 digit










?>