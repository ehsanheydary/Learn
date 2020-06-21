<?php
$data = array(array(1,4),array(1,3),array(0,0),array(1,0),array(1,1),array(5,3),array(6,0),array(4,0),array(2,0));
$handle = fopen('scores.data','w');
foreach ($data as $entry)
{
    $x=$entry[0];
    $y=$entry[1];
    fprintf($handle,"%d\t%d\r\n",$x,$y);
}
fclose($handle);