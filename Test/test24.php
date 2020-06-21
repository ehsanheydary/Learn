<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 2/25/2018
 * Time: 9:09 PM
 */
$conn = mysqli_connect('localhost','free',
    'jLKJfNyuExogcO5d','php7');
$test =
    mysqli_query($conn,"
INSERT INTO user (id,name)
 VALUES ('2','amir')
 ");
if($test){
    echo 'ok';
}else{
    echo mysqli_error($conn);
}
