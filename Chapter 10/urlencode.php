<?php
$a = '<a href="Request_Courses%201.php" id="#">Link</a>';
$C = urlencode($a);
$D = urldecode($C);
echo $a . '<br/>';
echo $C . '<br/>';
echo $D . '<br/>';