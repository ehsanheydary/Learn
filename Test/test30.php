<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/1/2018
 * Time: 8:06 PM
 */

$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);
$password = $_GET['password'];
$password = mysqli_real_escape_string($conn,$password);
session_start();
$_SESSION['a']=$password;