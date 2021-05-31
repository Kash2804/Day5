<?php
//count()
$a=array(10,20,30,40,50);
echo count($a);
//array_count_values()
$a=array(10,20,30,40,50);
$b= array_count_values($a);
foreach ($b as $key => $value) {
    echo"<br/>$key-<b>$value</b>";
}
//array_sum()
$c=array(2,4,6,8,10);
echo"<br>";
echo"<b>sum of array is:</b>".array_sum($c);
//array_product()
$d=array(1,2,3,4,5);
echo"<br><b>product of array is:</b>".array_product($d);
//array_reverse()
$e=array('html','c','php','java');
$rev=array_reverse($e);
echo"<br>";
print_r($rev);
//in_array()
$e=array('html','c','php','java');
$temp=in_array('java',$e);
echo"<br>";
echo $temp;
//array_rand()
$e=array('html','c','php','java');
$index=array_rand($e);
echo"<br>";
echo $e[$index];
//select multiple keys at random
$e=array('html','c','php','java');
$index=array_rand($e,2);
foreach ($index as $key => $value) {
   echo"<br>$key-<b>.$e[$value].</b>";    
}
//array_unique()
$e=array('html','c','java','php','java');
echo"<br>";
echo"<br>";
print_r(array_unique($e));
//array_merge()
$arr1=array('c','html','java','css');
$arr2=array(10,20,30,40);
$newarr=array_merge($arr1,$arr2);
echo"<br>";
print_r($newarr);
//array_search
$arr1=array('c','html','java','css');
$check=array_search('java',$arr1);
echo"<br>";
echo"<br>";
echo $check;
//range()
$arr=range("11","20");
foreach ($arr as $key => $value) {
    echo"<br>";
    echo"<br>$key-$value";
}
//sort()
$f=array('a','j','b','u','d');
echo"<br>";
echo"<br>";
sort($f);
print_r($f);
//rsort()
$f=array('a','j','b','u','d');
echo"<br>";
echo"<br>";
rsort($f);
print_r($f);
//asort
$f=array('a','j','b','u','d');
echo"<br>";
echo"<br>";
asort($f);
print_r($f);
//ksort
$arr3=array(
    "apple"=> "red",
    "mango"=> "yellow",
    "banana"=>"blue"
);
ksort($arr3);
echo"<br>";
foreach ($arr3 as $key => $value) {
    echo"<br>$key-$value";
}
//krsort()
$arr3=array(
    "apple"=> "red",
    "mango"=> "yellow",
    "banana"=>"blue"
);
krsort($arr3);
echo"<br>";
foreach ($arr3 as $key => $value) {
    echo"<br>$key-$value";
}
//shuffle()
$e=array('html','c','java','php','java');
shuffle($e);
echo"<br>";
foreach ($e as $key => $value) {
    echo"<br/>$value";
}
//array_change_key_case()
$arr3=array(
    "apple"=> "red",
    "mango"=> "yellow",
    "banana"=>"blue"
);
echo"<br>";
echo"<br>";
$UPPERCASE= array_change_key_case($arr3,CASE_UPPER);
print_r($UPPERCASE);
//array_key_exists()
$arr4=array("a"=>"apple","b"=>"banana","c"=>"cat");
echo"<br>";
echo array_key_exists('b',$arr4);
//array_combine()
$arr5=array("apple","cat","water","sand","air");
$arr6=array("red","white","blue","brown","dark blue");
$newarr1=array_combine($arr5,$arr6);
echo"<br>";
print_r($newarr1);
//end()
$arr5=array("apple","cat","water","sand","air");
echo"<br>";
echo"<br>";
echo end($arr5);
//compact()
$name="apple";
$color="red";
$arr7=compact("name","color");
echo"<br>";
print_r($arr7);
//array_flip()
$arr4=array("a"=>"apple","b"=>"banana","c"=>"cat");
$fliparray=array_flip($arr4);
echo"<br>";
echo"<br>";
print_r($fliparray);
//array_diff()
$a1=array(10,20,40,30,50);
$a2=array(10,30,50);
$diff=array_diff($a1,$a2);
echo"<br>";
echo"<br>";
print_r($diff);
//array_intersect
$a1=array(10,20,40,30,50);
$a2=array(10,30,50);
echo"<br>";
echo"<br>";
print_r(array_intersect($a1,$a2));
//array_values()
$arr4=array("a"=>"apple","b"=>"banana","c"=>"cat");
$arrnew=array_values($arr4);
foreach ($arrnew as $key => $value) {
    echo"<br>$key-$value";
}
//array_push
$a2=array(10,30,50);
array_push($a2,20,40);
echo"<br>";
echo"<br>";
print_r($a2);
//array_pop
$a2=array(10,30,50);
array_pop($a2);
echo"<br>";
print_r($a2);
//explode
$mystring="I Like Panipuri";
$myarr1=explode(" ",$mystring);
echo"<br>";
echo"<br>";
print_r($myarr1);
//implode
$myarr2=array("I","Like","Panipuri");
$mystring1=implode(" ",$myarr2);
echo"<br>";
echo"<br>";
echo $mystring1;
?>

