<?php
$p = array();
$Tas = 2;
$s = 100000;


for($i=1;$i <= $Tas; $i++)
{
    $p[$i] = 0;
}

for($k=0;$k < $s;$k++)
{
    $K = rand(1 , $Tas);
    $p[$K]++;
}
$f = array();
for($i=1;$i<=$Tas; $i++)
{
    $f[$i] = $p[$i]/$s;
    echo 'Faravani ' . $i . ' = ' . $f[$i].'<br/>';
}



