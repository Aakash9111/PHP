<?php


$a= array("Aakash","Aman","Aaditya",65,332,77);
$b= array("red","Aaditya",65,332,77);

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";
$c = array_diff($a,$b);

echo "<pre>";
print_r($c);
echo "</pre>";


?>
