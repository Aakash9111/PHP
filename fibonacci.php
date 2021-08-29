<html>
<?php
 $i1=-1;
 $i2=1;
  $n=20;
  $in=0;
  echo "Fibonacci Series";
  echo "<br>";
 while($in<=20)
 {
	 $c=$i1+$i2;
	 echo $c;
	 echo "  ";
	 $i1=$i2;
	 $i2=$c;
	 $in++;
 }


?>
</html>