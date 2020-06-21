<?php
use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;
include_once 'flintstone\load.php';
$options = array('dir' => __DIR__ , 'ext' => '.db' , 'gzip' => false , 'cache' => true , 'formatter' => new JsonFormatter(),);
$users = new Flintstone('users' , $options);
echo '<pre>';
$user = $users->getAll();
var_export($user);
//var_dump($user);
echo '</pre>';