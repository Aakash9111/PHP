<?php

$a= array("orange","blue","lemon","carrot");

echo "<pre>";
print_r($a);
echo "</pre>";


array_multisort($a,$b);//no of values must same in both arrays

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";


?>
