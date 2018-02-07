<?php 

if ( isset($name) ){
    echo "11-isset";
}else {
    echo "22-is not set";
}

echo $name;

// isset 

if (isset( $name )){
    echo "1-isset";
}

$name = "";


if (isset( $name )){
    echo "2-isset ' '";
}

// empty
echo "<br>";

if (empty( $name )){
    echo "1-empty ' '";
}


$name = "Qassim";

echo "<br>";
if (empty( $name )){
    echo "2-empty";
}

//NULL

$name = NULL;

echo "<br>";
if (isset( $name )){
    echo "3-isset NULL";
}
echo "<br>";
if (empty( $name )){
    echo "4-empty NULL";
}

//0

$name = 0;

echo "<br>";
if (isset( $name )){
    echo "4-isset 0";
}
echo "<br>";
if (empty( $name )){
    echo "5-empty 0";
}

// "0"

$name = "0";

echo "<br>";
if (isset( $name )){
    echo "5-isset '0'";
}
echo "<br>";
if (empty( $name )){
    echo "6-empty '0'";
}
?>