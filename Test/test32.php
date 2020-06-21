<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/1/2018
 * Time: 9:09 PM
 */

$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);
$password = mysqli_real_escape_string($conn,$_GET['password']);
$userName = mysqli_real_escape_string($conn,$_GET['userName']);
$select = mysqli_query($conn,"SELECT * FROM user WHERE
 name='$userName' AND password='$password'");
$numRows = mysqli_num_rows($select);
if($numRows==1){
    session_start();
    $_SESSION['login']=true;
}else{
    echo 'نام کاربری یا رمز عبور اشتباه است';
}