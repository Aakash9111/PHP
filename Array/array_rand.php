<?php

$a= array( "A"=>2, "B"=>30 ,"C"=>10  );
echo "<pre>";
print_r($a);
echo "</pre>";
$e=array_rand($a);

echo "$a[$e]";
