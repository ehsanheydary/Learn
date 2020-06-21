<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 4/12/2018
 * Time: 9:51 PM
 */
setcookie('b','20',
    time()+(865200),'/');

echo $_COOKIE['b'];