<?php

//for multidimention array
$a= array("a"=>"Aakash","b"=>"Aman","c"=>"Aaditya" );
$b= array("b"=>["colors"=>["Red","pink"]],
           "e"=>12,
		    2.45,
			56.88);


echo "<pre>";
print_r($a);
echo "</pre>";

echo "<pre>";
print_r($b);
echo "</pre>";


$c= array_merge_recursive($a,$b);
echo "<pre>";
print_r($c);
echo "</pre>";
/*
$d= $a + $b ;//replace second array value with same index

echo "<pre>";
print_r($d);
echo "</pre>";*/

?>