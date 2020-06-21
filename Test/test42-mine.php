<?php
$a = file_get_contents("http://localhost:23001/test1/test41-mine.php?");
$b = json_decode($a  , true);
echo $b["lastname"];