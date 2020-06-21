<?php
$text = '<a href="#">Link</a>';

$a = htmlspecialchars($text);
$b = htmlspecialchars_decode($a);
echo '<p>Original Text:'.$text.'</p>';
echo '<p>After htmlspecialchars:'.$a.'</p>';
echo '<p>After htmlspecialchars_decode:'.$b.'</p>';