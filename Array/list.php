<?php
//indexed array and associative array with numeric key
$a= array( "Aakash","Aman" ,"Aaditya","Aayush");
$b= array(1=>"Aakash",2=>"Aman" ,3=>"Aaditya",4=>"Aayush");
echo "<pre>";
print_r($a);
echo "</pre>";
/*
echo "<pre>";
print_r($b);
echo "</pre>";*/

list($m,$n,$v)= $a;

echo "Value of m : $m <br>";
echo "Value of n : $n <br>";
echo "Value of v : $v <br>";
?>
