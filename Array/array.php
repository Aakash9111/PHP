<html>

<?php

$a= array(1,4,5,7,8);
$l= count($a);
$m=0;
while($m<$l)
{
	echo "$a[$m] ";
	$m++;
}
echo "<br>";
$aa= array("Aakash","Aman","Aaditya");
$len= count($aa);
$p=0;
while($p<$len)
{
	echo "$aa[$p]";
	echo "<br>";
	$p++;
}
echo "Size of ";
echo sizeof($a);
?>
</html>