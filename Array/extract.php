<?php

$a=23;
$Z= array("a"=>"Aakash","b"=>"Aman" ,"c"=>"Aaditya","d"=>"Aayush");
echo "<pre>";
print_r($Z);
echo "</pre>";
extract($Z,EXTR_PREFIX_ALL,"TEXT");
//EXTR_OVERWRITE //DEFAULT VALUE
//EXTR_SKIP  //SKIP VALUE
//EXTR_PREFIX_SAME 
//EXTR_PREFIX_ALL  //USE PREFIX WITH ALL
echo "Value of a : $a <br>";
echo "Value of a : $TEXT_a <br>";
echo "Value of b : $TEXT_b <br>";
echo "Value of c : $TEXT_c <br>";
echo "Value of d : $TEXT_d <br>";
?>
