<?php
$data = array('pi' => 3.14 , 'e' => 2.71 , 'g' => 9.81 , 'Hello' => 'hi' ,'Domain'=> 'Civil' ,'Course' => 'Php programming');
$serial = serialize($data);
file_put_contents('b.txt',$serial);
$line = file_get_contents('b.txt');
$lines = unserialize($line);
echo '<pre><b>Serialize</b><br/>';
var_dump($line);
echo '<b>UN Serialize</b>';
echo '<br/>';
var_dump($lines);
echo '</pre>';