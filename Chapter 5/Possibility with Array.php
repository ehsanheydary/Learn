<?php
$C = 6;
$n = 100000;
$f = array();
for($i = 1; $i<= $C;$i++)
{
    $f[$i] = 0;
}

for ($i = 0 ; $i<$n;$i++)
{
    $r = rand(1,$C);
    foreach($f as $x=>$y){
        switch ($r) {
            case $x:$f[$x]++ ;
        }
    }
}
echo "<pre>";
var_dump($f);
echo "</pre>";