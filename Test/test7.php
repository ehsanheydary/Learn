<?php
//بزرگترین عدد را چاپ کنید
    $x = 3;
    $y = 4;
    $c = 2;
    if($x>$y && $x>$c){
        echo $x;

    }
    elseif($y>$x && $y>$c){
        echo $y;
    }
    elseif($c>$x && $c>$y){
        echo $c;
    }
?>