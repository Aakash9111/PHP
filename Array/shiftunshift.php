<?php


$a= array("Aakash","Aman","Aaditya" );
$b= array( 11,12,13 );


echo "<pre>";
var_dump($a);
echo "</pre>";

echo "<pre>";
var_dump($b);
echo "</pre>";

array_shift($a);//Delete First Element of Array
array_shift($b);//Delete First Element of Array

foreach($a as $v)
    echo "$v<br> ";
	
foreach($b as $v)
    echo "$v<br>";	
	
array_unshift($a,"Aayush",);	//Add Element At First Position 
array_unshift($b,275);//Add Element At First Position 
foreach($a as $v)
    echo "$v<br>";
	
foreach($b as $v)
    echo "$v<br>";	


?>