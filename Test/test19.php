<?php

if(
    isset($_POST['test'])
    &&
    $_POST['test']!=''
    &&
    is_numeric($_POST['test'])
) {

    $a = $_POST['test'];
    if ($a > 10) {
        echo 'قبول';
    } else {
        echo 'مردود';
    }
}else{
    echo 'مقدار وارد شده صحیح نیست';
}
