<?php
$b= array(1,"Aakash",402,"Aman",63,"Aaditya",50000);
echo "<pre>";
var_dump($b);
echo "</pre>";
 
if(in_array("AAkash",$b)) 
echo  "Found<br>";
else
	echo "Not Found<br>";
 
if(in_array(402,$b)) 
echo  "Found<br>";
else
	echo "Not Found<br>";

if(in_array("Aayush",$b)) 
echo  "Found<br>";
else
	echo "Not Found<br>";


if(in_array(111,$b)) 
echo  "Found<br>";
else
	echo "Not Found<br>";

?>