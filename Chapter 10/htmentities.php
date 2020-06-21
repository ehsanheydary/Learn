<?php
$text = '<a href="#">Link</a>';

$a = htmlentities($text);
$b = html_entity_decode($a);
echo '<p>Original Text:'.$text.'</p>';
echo '<p>After htmlentities:'.$a.'</p>';
echo '<p>After html_entity_decode:'.$b.'</p>';