<?php


$a= array("Aakash","Aman","Aaditya",65,332,77);
$b= array(23,"red");

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";
array_splice($a,2,0,$b);
//array_splice($a,2,count($a),$b);
//array_splice($a,2,count($a),$b);
echo "<pre>";
print_r($a);
echo "</pre>";


?>
