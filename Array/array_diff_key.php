<?php


$a= array("Aakash","Aman","Aaditya",65,332,77);
$b= array("red","Aaditya",65,332,77);
$d= array();
echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";
$c = array_diff_key($a,$b);

echo "<pre>";
print_r($c);
echo "</pre>";


?>
