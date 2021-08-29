<?php


$a= array("Aakash","Aman","Aaditya" );
$b= array(  12,
		    2.45,
			56.88);


echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";


$c= array_combine($a,$b); //same size of array //indexed array only
echo "<pre>";
print_r($c);
echo "</pre>";


?>