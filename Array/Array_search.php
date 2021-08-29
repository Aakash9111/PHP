<?php
$b= array(1,"Aakash",402,"Aman",63,"Aaditya",50000);
echo "<pre>";
var_dump($b);
echo "</pre>";
 
echo array_search(1,$b);
echo array_search("Aman",$b);
echo array_search(65,$b);

/*Returns index of Element*/


?>