<?php


$a= array("Aakash","Aman","Aaditya",65,332,77);
$b= array(23,"red");

echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";
array_splice($b,1);//to remove middle elements
echo "<pre>";
print_r($b);
echo "</pre>";
array_splice($a,2,2);//(array1,start,length,array2)//remove 2 elements from start point
echo "<pre>";
print_r($a);
echo "</pre>";


?>
