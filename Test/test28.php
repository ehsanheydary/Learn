<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/25/2018
 * Time: 9:37 PM
 */

$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);
$query = mysqli_query($conn,"SELECT * FROM user WHERE name='amir' LIMIT 1 OFFSET 2");

while ( $arrayQuery = mysqli_fetch_assoc($query))
{
    echo $arrayQuery['id'].'<br>';
}