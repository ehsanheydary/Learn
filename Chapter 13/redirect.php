<?php
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
switch ($id){
    case 1 : $url  = 'http://google.com';
}
if(is_null($id))
{
    die("Error: Invalid destination");
}
header("location: $url ");
die();