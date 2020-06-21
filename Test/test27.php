<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/25/2018
 * Time: 9:32 PM
 */
$conn = mysqli_connect('localhost','free','jLKJfNyuExogcO5d','php7');
$query = mysqli_query($conn,"SELECT * FROM user WHERE id='1'");
$arrayQuery = mysqli_fetch_assoc($query);
echo $arrayQuery['name'];