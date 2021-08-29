<html>
<?php
$a= "i love php, i love php too";
echo stristr($a,"Php");//case insensitive//returns right substring
echo "<br>";
echo stristr($a,"Php",true);//returns left substring 
?>

</html>