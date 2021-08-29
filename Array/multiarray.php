<?php
$b= array(
         array(1,"Aakash",40000),
		 array(2,"Aman",60000),
		 array(3,"Aaditya",50000)
	 );


foreach($b as $v1)

 {  
     foreach($v1 as $v2)
	  echo "$v2  ";
	  echo "<br>";
 }	
echo "<pre>";
var_dump($b);
echo "</pre>";
 echo "Size of ";
 echo sizeof($b);
 echo " Size of Recursive ";
 echo sizeof($b,1);

?>