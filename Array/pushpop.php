<?php


$a= array("Aakash","Aman","Aaditya" );
$b= array( 11,12,13 );


echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";

array_pop($a); //Remove LAst elelment of Array
array_pop($b);//Remove LAst elelment of Array

foreach($a as $v)
    echo "$v<br> ";
	
foreach($b as $v)
    echo "$v<br>";	
	
array_push($a,"Aayush",);	
array_push($b,275);//Add Element At last 
foreach($a as $v)//Add Element At last 
    echo "$v<br>";
	
foreach($b as $v)
    echo "$v<br>";	


?>