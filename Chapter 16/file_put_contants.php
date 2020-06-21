<?php
// file_put_contents('a.txt' , "first line\r\nsecond line\r\n...");
file_put_contents('a.txt' , "\r\nAnd so on",FILE_APPEND);
echo file_get_contents('a.txt');