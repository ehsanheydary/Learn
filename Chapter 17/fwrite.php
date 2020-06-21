<?php
if(!($handle = fopen('a.txt' , 'w')))
{
    die('the file can not be opened');
}
fwrite($handle,'Hello World Ehsan is coming to php programming');
fclose($handle);