<?php
$n = 556;
$C = 11;
$counter = 0;
while($n >= 1)
{
    $n /= 2;
   echo $n . "<br/>";
}
while (++$counter < $C)
{
    if($counter < $C)
    echo "<br/>";
    echo $n;
    $n *= 2;
    break;
}