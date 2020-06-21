<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/25/2018
 * Time: 9:21 PM
 */
$conn = mysqli_connect('localhost','free',
    'jLKJfNyuExogcO5d','php7');
$a = mysqli_query($conn,"
    DELETE FROM user WHERE id = 'a' 
");
if(mysqli_affected_rows($conn)){
    echo 'ok';
}else{
    echo 'not OK';
}