<?php

$a= array( "Aakash"=>2, "Aman"=>34 ,"Aaditya"=>101  );


echo "<pre>";
print_r($a);
echo "</pre>";


$e= array_change_key_case($a, CASE_UPPER);//use CASE_LOWER
echo "<pre>";
print_r($e);
echo "</pre>";
