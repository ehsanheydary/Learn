<?php
$lines = file('a.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
var_dump($lines);
/*foreach($lines as $line)
{
    echo $line  . "\n";
}
*/
echo '</pre>';