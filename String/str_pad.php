<html>
<?php
$a= "i love php";
echo str_pad($a,20,"!");//used to increse length of string
echo "<br>";
echo str_pad($a,20,"!",STR_PAD_LEFT);
echo "<br>";
echo str_pad($a,20,"!",STR_PAD_BOTH);
//STR_PAD_BOTH
//STR_PAD_LEFT
//STR_PAD_RIGHT
?>

</html>