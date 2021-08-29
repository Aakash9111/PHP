<?php
$a= array("A"=>2,"B"=>3,"C"=>33);
$b= array(
   $a,
  "a"=>123,
  "b"=>345,
  "c"=>345);
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
function myfun($v,$k,$p)
{
echo "$k $p $v<br>";
}
//$e= array_walk_recursive($a,"myfun");
$e= array_walk_recursive($b,"myfun","is a Key of");
