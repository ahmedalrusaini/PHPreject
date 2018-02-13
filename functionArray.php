<?php 
$assoc = array(
    "c" => "fix",
    "a" => "car",
    "b" => "cat"
);
//تغيير المفتاح من حروف صغيره الى كبيره
print_r( array_change_key_case($assoc,CASE_UPPER/* CASE_LOWER */) );

echo "<pre>";
print_r(array_chunk($assoc,2));
echo "<pre>";
//حساب عدد عناصر المصفوفة
echo "<br>";
echo count($assoc);

echo "<br>";
sort($assoc);

foreach ($assoc as $n){
    echo $n . "<br>";
}

//array_reverse عكس عناصر المصفوفة
echo "<br>";
$arr = array_reverse($assoc);
foreach ($arr as $n){
    echo $n . "<br>";
}

//موقع القيمة في المصفوفة indexOf(char):int
echo "<br>";
$m = array_search("fix",$assoc);
echo $m . "<br>";


//جمع العناصر المشتركة في المصفوفة الاولى والثانية
$arr1 = array("a1","a2","b1");
$arr2 = array("b1","a1","b3");
$interArray = array_intersect($arr1,$arr2);
foreach ($interArray as $in){
    echo $in . "<br>";
}

//max , min

$num = array(1,3,2,4);
$max = max($num);
$min = min($num);
echo "<br>".$max;
echo "<br>".$min;
echo "<br>";

print_r($num);

//sort
sort($num);
print_r($num);


//rsort
rsort($num);
print_r($num);

//implode
echo implode(" .. ", $num);
//explode like split()
$nameString = "a,b,c";
print_r(explode(",", $nameString));
//in_array
echo "<br>" . in_array(12, $num);
echo "<br>" . in_array(2, $num);


?>