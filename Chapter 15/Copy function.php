<?php
//Copy file
copy('a.txt','a.txt.bkp');
copy('a.txt' , 'b.txt');
//Rename and copy file
rename('a.txt.bkp',dirname(__DIR__) . DIRECTORY_SEPARATOR .'b1.txt');
//Delete file
unlink(dirname(__DIR__) . DIRECTORY_SEPARATOR .'b1.txt');
//Change Mode
chmod('b.txt' , '0400');
var_dump(filegroup('b.txt'));