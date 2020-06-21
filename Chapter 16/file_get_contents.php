<?php
$lines = file_get_contents('a.txt' , true , null , 0,13);
echo $lines;