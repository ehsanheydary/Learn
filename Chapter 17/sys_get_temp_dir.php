<?php
$dir = sys_get_temp_dir();
$filename = tempnam($dir ,'Civil-');
$uniqid = uniqid('Civil-');
$uniqid1 =$dir . DIRECTORY_SEPARATOR . $uniqid . 'tmp';
echo $dir . '<br/>' ;
echo $uniqid1 . '<br/>';
echo $filename . '<br/>';