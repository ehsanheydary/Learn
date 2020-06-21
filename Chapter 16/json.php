<?php
$data = array('pi' => 3.14 , 'e' => 2.71 , 'g' => 9.81 , 'Hello' => 'hi' ,'Domain'=> 'Civil' ,'Course' => 'Php programming');
$serial = json_encode($data);
file_put_contents('b.txt',$serial);
$line = file_get_contents('b.txt');
$lines = json_decode($line);
echo '<pre><b>json_encode</b><br/>';
var_dump($line);
echo '<b>json_decode</b>';
echo '<br/>';
var_dump($lines);
echo '</pre>';