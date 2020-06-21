<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 4/12/2018
 * Time: 7:31 PM
 */
$f = date('Y/d/m');
$d=strtotime($f);
$d = strtotime("+10 days",$d);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
