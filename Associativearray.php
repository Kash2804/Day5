<?php
//Associative Array
//Method 1
$a[0]=100;
$a['h']="html";
$a['b']="bold";
$a[1]=34.14;
//Method 2
$a=array(
    0=>100,
    'h'=>"html",
    'b'=>"bold",
    1=>34.14
);
//Print Value
echo"h for" .$a['h'];
foreach ($a as $value) {
    echo"<br>value is $value";
}
foreach ($a as $key => $value) {
    echo"<br> key is <b>$key</b> and value is <b>$value</b>";
}
//3 Inbuilt Funtions to Debug an Array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";
?> 
 
