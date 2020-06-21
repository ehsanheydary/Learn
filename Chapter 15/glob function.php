<?php
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'PLUGIN' . DIRECTORY_SEPARATOR;
$files = glob($dir . '*.php');
foreach ($files as $file)
{
    include_once($file);
}
programmer_testing();