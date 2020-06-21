<?php
use Flintstone\Flintstone;
use Flintstone\Formatter\JsonFormatter;
include_once 'flintstone\load.php';
$options = array('dir' => __DIR__ , 'ext' => '.db' , 'gzip' => false , 'cache' => true , 'formatter' => new JsonFormatter(),);
$users = new Flintstone('users' , $options);
$number_of_users = count($users->getKeys());
?>
<p>The system has <?php echo $number_of_users;  ?>user's</p>
