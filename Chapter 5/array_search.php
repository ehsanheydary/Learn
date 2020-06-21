<?php
$A= ["Apple" , "banana" , "Orange"];
$search =array_search("Apple" , $A);
echo "<pre>";
$bool = ($search !== false);
print_r($search);
echo "<br/>";
var_dump($bool);
echo "</pre>";