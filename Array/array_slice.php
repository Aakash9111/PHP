<?php


$a= array("Aakash","Aman","Aaditya",65,332,77);


echo "<pre>";
print_r($a);
echo "</pre>";

//array_slice(array,start,length)
$c= array_slice($a,-2,2);
$d= array_slice($a,2,2);
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<pre>";
print_r($d);
echo "</pre>";


?>
