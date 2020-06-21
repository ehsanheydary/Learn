<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/25/2018
 * Time: 9:44 PM
 */
$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);
mysqli_set_charset($conn, "utf8");


$select = mysqli_query($conn,"SELECT * FROM user WHERE name='ali'");

$numRows = mysqli_num_rows($select);

if($numRows==0){
    echo 'mojod nist';
}else{
    echo $numRows;
}