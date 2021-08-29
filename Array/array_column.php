<?php

$a= array( array(
              "id"=>101,
              "firstname"=>"Aakash",
            "lastname"=>"Dubey"      ),
            array(
              "id"=>102,
            "firstname"=>"Aman",
            "lastname"=>"Dubey"      ),
            array(
              "id"=>103,
            "firstname"=>"Aayush",
            "lastname"=>"Dubey"      )
);


echo "<pre>";
print_r($a);
echo "</pre>";

$d= array_column($a,"firstname");
echo "<pre>";
print_r($d);
echo "</pre>";

$e= array_column($a,"lastname","id");
echo "<pre>";
print_r($e);
echo "</pre>";
