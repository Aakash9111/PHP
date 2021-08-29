<?php


$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya" );
$b= array( 11=>"Aakash", 12=>"Aman" ,13=>"Aaditya" );
$c= array( "1"=>"Aakash", "2"=>"Aman" ,"3"=>"Aaditya" );

echo "<pre>";
var_dump($a);
echo "</pre>";

echo "<pre>";
var_dump($b);
echo "</pre>";
echo "<pre>";
var_dump($c);
echo "</pre>";

foreach($a as $v)
    echo "$v ";
	
foreach($b as $v)
    echo "$v ";	
foreach($c as $v)
    echo "$v ";

?>