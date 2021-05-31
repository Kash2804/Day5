<?php
//Numerical Array
//Method 1
$a[0]=10;
$a[1]=20;
$a[2]=30;
$a[3]="Apple";
$a[4]=15.56;
//Method 2
$a[]=10;
$a[]=20;
$a[]=30;
$a[]="Apple";
$a[]=15.56;
//Method 3
$a=array(10,20,30,"Apple",15.56);
//To Print Array Value
echo $a[2];
//To Print Whole Array
for($k=0;$k<count($a);$k++){
    echo"<br>$a[$k]";
}
//3 Inbuilt Funtions to debug an Array
echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";

?>