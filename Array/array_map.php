<?php

$a= array(1,2,3,4,5);
$b = array("Red","BLue","green","Violet","orange");
echo "<pre>";
print_r($a);
echo "</pre>";
function my1($n)
{
return $n*$n;
}
function my2($n,$m)
{
return [$n=>$m];
}
$e= array_map("my1",$a);
$f= array_map("my2",$a,$b);
$g= array_map(null,$a,$b);
echo "<pre>";
print_r($e);
echo "</pre>";
echo "<pre>";
print_r($f);
echo "</pre>";
echo "<pre>";
print_r($g);
echo "</pre>";
