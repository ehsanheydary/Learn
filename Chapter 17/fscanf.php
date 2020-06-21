<?php
$handle = fopen('scores.data','r');
while (!feof($handle))
{
    $x = null;
    $y = null;
    //list($x,$y) = fscanf($handle , "%d\t%d\r\n");
    fscanf($handle , "%d\t%d\r\n" ,$x , $y);
    if(is_null($x) || is_null($y))break;
    echo 'x = '. $x .'  , y = ' . $y;
    echo '<br/>';
}