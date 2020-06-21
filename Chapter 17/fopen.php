<?php
$handle = fopen('a.txt' , 'r');
if($handle === false)
{
    die('the file cannot be opened');
}
$data1 = fread($handle , 6);
$data2 = fread($handle , 6);
echo '<pre>';
var_dump($data1);
echo '</pre>';
echo '<pre>';
var_dump($data2);
echo '</pre>';
fclose($handle);