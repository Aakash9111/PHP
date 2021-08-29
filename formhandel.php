<?php
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";*/
echo "Name: ";
echo $_REQUEST["fname"]. $_REQUEST["mname"]."  ".$_REQUEST["lname"];
echo "<br>";echo "<br>";
echo "Gender: ";
echo $_REQUEST["gender"];
echo "<br>";echo "<br>";
echo "Mobile Number : ";
echo $_REQUEST["phone"];
echo "<br>";echo "<br>";
echo "Address: ";
echo $_REQUEST["Address"];
echo "<br>";echo "<br>";
echo "Email: ";
echo $_REQUEST["email"];
echo "<br>";echo "<br>";



?>