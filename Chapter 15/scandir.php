<?php
$files=array_diff(scandir(dirname(__DIR__)) , array('.' , '..'));
echo '<pre>';
var_dump($files);
echo '</pre>';