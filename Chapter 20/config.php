<?php

define('DB_FILENAME','myapp.data');

define('SITE_URL','http://localhost:23001/Chapter%2020/');

define('SITE_PATH',__DIR__ . DIRECTORY_SEPARATOR);

define('APP_TITLE','برنامه اول من');
foreach(glob('Lib/*.php') as $Inc_File)
{
    include_once($Inc_File);
}
CreateTables();
InitializeUsers();