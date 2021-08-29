<?php

$a= array( "Aakash","Aman" ,"Aaditya",11,"B",13);


echo "<pre>";
print_r($a);
echo "</pre>";

echo "current: ". current($a);
echo "<br>";
echo "key: ". key($a);
echo "<br>";
next($a);
echo "position: ". pos($a);
echo "<br>";
prev($a);
echo "position: ". pos($a);
echo "<br>";
end($a);
echo "position: ". pos($a);
echo "<br>";
echo "<pre>";
print_r(each($a));
echo "</pre>";
echo "<br>";
reset($a);
echo "<br>";
echo "position: ". pos($a);
?>
