<?php
function check_file_existance($file)
{
    $type = 'File';
    if(is_dir($file))
    {
        $type = 'Directory';
    }
    if(file_exists($file))
    {
        echo $type  . ' ' . $file . '<span style="color: #080"> Exists</span> <br/>';
        $size = filesize($file);
        echo 'File Size' . $size;
    }
    else
    {
        echo $type . ' ' . $file . '<span style="color: #e00"> Does not Exist</span> <br/>';
    }
    echo '<br/>';
}
function mkdir_if_not_exist($path = __DIR__ . DIRECTORY_SEPARATOR , $name = 'NewDir')
{
    if(!file_exists($path . $name))
    {
        mkdir($path . $name);
    }
}
function rmdir_if_exist($path = __DIR__ . DIRECTORY_SEPARATOR , $name = 'NewDir')
{
    if(file_exists($path . $name))
    {
        rmdir($path . $name);
    }
}
function MkdirIntoDirectory($path = __DIR__ . DIRECTORY_SEPARATOR , $name = 'NewDir')
{
    if(!file_exists($path . $name))
    {
        mkdir($path . $name,0777,true);
    }
}