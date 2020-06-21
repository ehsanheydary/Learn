<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 4/8/2018
 * Time: 9:43 PM
 */
$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);
if(isset($_GET['id']) && $_GET['id']!=''){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $selectUser = mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
    $rowUser = mysqli_fetch_assoc($selectUser);
    echo $rowUser['family'];
}