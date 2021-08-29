<?php

$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya" );
$b= array( 11=>"Aaka", "B"=>"Aman" ,13=>"Aaditya" );


echo "<pre>";
print_r($a);
echo "</pre>";

//array_slice(array,start,length)
$c= array_slice($a,-2,2,true);//true=>returns key of value in array
$d= array_slice($a,2,2,true);
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<pre>";
print_r($d);
echo "</pre>";


?>
