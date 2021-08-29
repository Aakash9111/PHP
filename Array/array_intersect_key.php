<?php
$a= array("a"=>"Aakash","b"=>"Aman","c"=>"Aaditya");
$b= array("12"=>"red","b"=>"Aman" ,"e"=>13);
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
$d= array_intersect_key($a,$b);
echo "<pre>";
print_r($d);
echo "</pre>";
