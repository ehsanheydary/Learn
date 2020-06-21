<?php
//بزرگترین عدد را چاپ کنید
    $x = 3;
    $y = 4;
    $c = 2;
    if($x>$y){
        if($x>$c){
            echo $x;
        }
    }elseif ($y>$c){
        echo $y;
    }else{
        echo $c;
    }
?>