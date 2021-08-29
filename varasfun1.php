<html>
<?php
  echo "Variable as Function";
  echo "<br>";
 function Add($m,$n)
 {   $z=$m+$n;
	 echo "Addition : $z";
	 echo "<br>";
 }
 function Sub($m,$n)
 {    $z=$m-$n;
	  echo "Substraction : $z";
	   echo "<br>";
 }
 function Multi($m,$n)
 {     $z=$m*$n;
	  echo "Multiply : $z";
	   echo "<br>";
 }
 $v="Add";
 $v(3,2);
  $m="Sub";
 $m(3,2);
 $n="Multi";
 $n(3,2);


?>
</html>