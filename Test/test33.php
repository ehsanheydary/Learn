<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/1/2018
 * Time: 9:13 PM
 */

session_start();
if(isset($_SESSION['login']) && $_SESSION['login']==true){
    echo 'خوش آمدید';
}else{
    header('location:test32.php');
}