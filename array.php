<?php 
$numbers = array();
$names = array("ameera","arwa","haifa","reem","sarah","Duha","Maria");
$multi = array(1,2,array("A","B","C"));

for ($i=0;$i < 7 ;$i++){
    echo $names[$i];
    echo "<br>";
}

echo $multi[0];
echo "<br>";

echo $multi[1];
echo "<br>";

echo $multi[2][0];
echo "<br>";
echo $multi[2][1];
echo "<br>";
echo $multi[2][2];
echo "<br>";

echo "<pre>";
print_r($names);
echo "<pre>";

echo "<pre>";
print_r($multi);
echo "<pre>";

//php Associative array

$assoc = array(
    "kay1" => "value1",
    "kay2" => "value2",
    "kay3" => "value3"
);

echo "<br>";
echo $assoc['kay1'];
echo "<br>";
echo $assoc['kay2'];
echo "<br>";
echo $assoc['kay3'];

echo "<pre>";
print_r($assoc);
echo "<pre>";

?>