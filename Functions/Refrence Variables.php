<?php
include_once("Functions.php");
$a = array(11,12,13,14,15,16,17);
$i = 2;
$e = &get_element($a , $i);
echo 'Before';
echo '$a['.$i.'] = ' . $a[$i];
echo '<br/>';
echo '$e = ' . $e;
echo '<br/>';
$e ++ ;
echo '<br/>';
echo 'After';
echo '$a['.$i.'] = ' . $a[$i];
echo '<br/>';
echo '$e = ' . $e;

unset($e);
$e = 0;
echo '<br/>';
echo '<br/>';
echo 'After';
echo '$a['.$i.'] = ' . $a[$i];
echo '<br/>';
echo '$e = ' . $e;


$e = 0;
echo '<br/>';
echo '<br/>';
echo 'After';
echo '$a['.$i.'] = ' . $a[$i];
echo '<br/>';
echo '$e = ' . $e;





echo '<br/>';echo '<br/>';echo '<br/>';
$ocho = 455;
$yacha = 5;



$func = function ($ocho) use (&$yacha)
{
    echo $yacha;
    $yacha++;
    echo $yacha;
};
echo $yacha;