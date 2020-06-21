<?php
$handle = fopen('a.txt' , 'r');
if($handle === false)
{
    die('the file cannot be opened');
}
echo '<pre>';
while(!feof($handle))
{
    $line = fgets($handle);
    $line = str_replace("\r\n"," " , $line);
    echo $line;
}
echo '</pre>';
/*
while($line = fgets($handle))
{
    echo $line;
}
*/
fclose($handle);