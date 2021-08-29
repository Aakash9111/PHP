<html>
<?php
$a= "i love php, i love php too";
echo strstr($a,"php");//case sensitive//returns right substring
echo "<br>";
echo strstr($a,"php",true);//returns left substring 
?>

</html>