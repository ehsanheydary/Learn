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
UPDATE user SET name='hasan' WHERE id='1'
");