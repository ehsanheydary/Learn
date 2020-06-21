<?php
use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;
include_once 'flintstone\load.php';
$options = array('dir' => __DIR__ , 'ext' => '.db' , 'gzip' => false , 'cache' => true , 'formatter' => new JsonFormatter(),);
$users = new Flintstone('users' , $options);
$user1 = array('username'=>'admin' , 'password' => '123456');
$user2 = array('username'=>'admin' , 'password' => 'ehsan');
$users->set('1' , $user1);
$users->set('2' , $user2);