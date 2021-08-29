<?php

$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya",
            11=>"Aaka", "B"=>"Aman" ,13=>"Aaditya" );


echo "<pre>";
print_r($a);
echo "</pre>";

$d= array_chunk($a,3);
echo "<pre>";
print_r($d);
echo "</pre>";

$e= array_chunk($a,2,true);
echo "<pre>";
print_r($e);
echo "</pre>";
