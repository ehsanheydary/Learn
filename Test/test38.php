<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/4/2018
 * Time: 9:48 PM
 */
$a = $_GET['test'];
$b = json_decode($a,true);
echo $a;
echo '<br>';
echo $b['c'][0]['w'];
