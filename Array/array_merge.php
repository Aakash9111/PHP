<?php
//for indexed Array 

$a= array("Aakash","Aman","Aaditya" );
$b= array( 11,12);
$d= array(2.45,56.88);

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";

echo "<pre>";
print_r($d);
echo "</pre>";
$c= array_merge($a,$b,$d); //Remove LAst elelment of Array
echo "<pre>";
print_r($c);
echo "</pre>";



?>