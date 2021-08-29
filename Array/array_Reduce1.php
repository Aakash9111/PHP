<?php

$a= array("A"=>2,"B"=>3,"C"=>4);
echo "<pre>";
print_r($a);
echo "</pre>";
function myfun($n,$v)
{
return $n. "-" .$v;
}
function myfunc($n,$v)
{
return $n*$v;
}

$e= array_Reduce($a,"myfunc",10);
echo "<pre>";
print_r($e);
echo "</pre>";


?>
