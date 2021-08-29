<?php

$a= array("A"=>2,"B"=>3,"C"=>33);
echo "<pre>";
print_r($a);
echo "</pre>";
function myfun($v,$k,$p)
{
echo "$k $p $v<br>";
}
//$e= array_walk($a,"myfun");
$e= array_walk($a,"myfun","is a Key of");
