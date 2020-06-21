<?php
$flintstone_file = array(
    'Config.php','Database.php','Exception.php','Flintstone.php','Line.php','Validation.php'
    ,'Cache/CacheInterface.php','Cache/ArrayCache.php'
    ,'Formatter/FormatterInterface.php','Formatter/JsonFormatter.php','Formatter/SerializeFormatter.php'
);
$flintstone_dir = __DIR__ . DIRECTORY_SEPARATOR;
foreach ($flintstone_file as $flintstone_file)
{
    require_once $flintstone_dir . $flintstone_file;
}