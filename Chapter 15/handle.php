<?php
$handle = opendir(dirname(__DIR__));
echo '<ul>';
while(true)
{
    $item = readdir($handle);
    if($item === false)
    {
        break;
    }
    if(in_array($item , array('.','..')))
    {
        continue;
    }
    if(is_dir(dirname(__DIR__) . DIRECTORY_SEPARATOR . $item))
    {
       $type = 'Directory';
    }
    else
    {
        $type = 'File';
    }
    echo '<li> <b>'
            .$item. '</b> ' . $type .
        '</li>';
    echo'<br/>';

}
echo '</ul>';
closedir($handle);