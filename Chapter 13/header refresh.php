<?php
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
switch ($id)
{
    case 1 : $url  = 'http://google.com';break;
    case 2 : $url  = 'http://faradars.org';break;
    case 3 : $url  = 'http://amazon.com';break;
    case 4 : $url  = 'http://bing.com';break;
}
if(is_null($id))
{
    die("Error: Invalid destination");
}
if(headers_sent($file,$line))
{
    echo 'Headers are already sent! <br/>';
    echo $file;
    echo'<br/>';
    echo $line;
    die();
}
header("Refresh: 5; url=$url");
die();