<?php
$a = $_GET['test'];

switch ($a){
    case 1:
        echo 'فروردین';
        break;
    case 2:
        echo 'اردیبهشت';
        break;
    case 3:
        echo 'خرداد';
        break;
    default:
        echo 'اشتباه';
        break;
}