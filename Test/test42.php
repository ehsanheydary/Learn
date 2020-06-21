<?php
$w = $_GET['id'];
$a = file_get_contents
("http://www.omdbapi.com/?apikey=dd9c3df6&i=$w");

$b = json_decode($a,true);

echo $b['Awards'];
