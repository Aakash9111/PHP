<?php
$a= array( "A"=>"Aakash", "B"=>"Aman" ,"C"=>"Aaditya" );
$b= array( 11=>"Aaka", "B"=>"Aman" ,13=>"Aaditya" );
function compare($a,$b)
{
if($a === $b)
  return 0;
return ($a>$b)?1:-1;
}
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
$d= array_intersect_uassoc($a,$b,"compare");
echo "<pre>";
print_r($d);
echo "</pre>";
