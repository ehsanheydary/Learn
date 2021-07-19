<?php

$g = array('9logy' , 'url' => 'signalsazan');

$A= ["Apple" , "banana" , "Orange" , $g];
$search =array_search("signalsazan" , $g);
echo "<pre>";
$bool = ($search !== false);
var_dump($search);
echo "<br/>";
var_dump($bool);
echo "</pre>";

