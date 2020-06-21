<?php
$handle = fopen('a.txt' , 'r');
    if(!$handle)
    {
        die('the file cannot be opened.');
    }
    echo '<pre>';
    $contents = stream_get_contents($handle);
    echo $contents;
    echo '</pre>';
fclose($handle);