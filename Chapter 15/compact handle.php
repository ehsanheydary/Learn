<?php
$dir = dirname(__DIR__);
$handle = opendir($dir);
echo '<ul>';
while($item = readdir($handle))
{
    if(in_array($item,array('.' , '..')))
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
    echo '<li>';
    echo '<b>' . $item . '</b> ' . $type;
    echo '</li>';
    echo'<br/>';
}
echo '</ul>';
closedir($handle);