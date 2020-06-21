<?php
error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
switch ($id)
{
    case 1 :
        $filename  = 'photo_2018-03-10_08-00-24 -.rar';
        $type  = 'application/zip';
        break;
    case 2 :
        $filename  = 'photo_2018-03-10_08-00-24 -.jpg';
        $type = 'image/jpeg';
        break;
    case 3 :
        $filename  = 'photo_2017-08-23_10-03-47 -.jpg';
        $type = 'image/jpeg';
        break;
    case 4 :
        $filename  = '1.txt';
        $type = 'Text/plain';
        break;
}
if(is_null($id))
{
    http_response_code(404);
    die("Error: Invalid destination");
}
else if (is_null($filename))
{
    http_response_code(404);
    header("HTTP/1.0 404 NOT FOUND");
    die("Error: File Not Found");
}
if(headers_sent($file,$line))
{
    echo 'Headers are already sent! <br/>';
    echo $file;
    echo'<br/>';
    echo $line;
    die();
}
header("Content-Disposition: attachment;filename=$filename");
header("Content-Type: $type");
readfile("Files/$filename");