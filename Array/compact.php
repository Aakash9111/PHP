<?php

$a="Aakash";
$b="Aman";
$c="Aaditya";
$d="Hello";
$e="Php";
$X=["d","e"];
$Z=compact("a","b","c",$X);

echo "<pre>";
print_r($Z);
echo "</pre>";


?>
