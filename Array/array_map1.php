<?php


$b = array("a"=>"Red","B"=>"BLue","C"=>"green","D"=>"Violet");
echo "<pre>";
print_r($b);
echo "</pre>";
function my1($n)
{
return mb_strtoupper($n);
}

$e= array_map("my1",$b);
//$f= array_map("my2",$a,$b);
//$g= array_map(null,$a,$b);
echo "<pre>";
print_r($e);
echo "</pre>";
/*
echo "<pre>";
print_r($f);
echo "</pre>";
echo "<pre>";
print_r($g);
echo "</pre>";*/
