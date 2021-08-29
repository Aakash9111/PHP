<?php
$cookie_name = "user";
$cookie_value = "Aakash";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/",);

?>

<html>
<?php

 if(!isset($_COOKIE['$cookie_name']))
 { 
    echo "Cookie is not Set";
   }
 else{
	 echo $_COOKIE['$cookie_name'];
    }
?>


</html>