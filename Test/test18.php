<?php

if(
    isset($_GET['test'])
&&
    $_GET['test']!=''
&&
    is_numeric($_GET['test'])
) {

    $a = $_GET['test'];
    if ($a > 10) {
        echo 'قبول';
    } else {
        echo 'مردود';
    }
}else{
    echo 'مقدار وارد شده صحیح نیست';
}
