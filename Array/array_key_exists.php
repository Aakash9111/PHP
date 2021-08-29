<?php

$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya" );
$b= array( 11=>"Aakash", 12=>"Aman" ,13=>"Aaditya" );
$c= array( "1"=>"Aakash", "2"=>"Aman" ,"3"=>"Aaditya" );

echo "<pre>";
print_r($b);
echo "</pre>";
$d= array_key_exists("B",$a);
$e= key_exists("dd",$c);
echo "<pre>";
echo "$d<br>";
echo $e;
echo "</pre>";




?>
