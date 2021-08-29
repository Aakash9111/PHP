<?php
$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya" );
$b= array( 11=>"Aaka", "B"=>"Aman" ,13=>"Aaditya" );

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
$d= array_intersect_assoc($a,$b);
echo "<pre>";
print_r($d);
echo "</pre>";
