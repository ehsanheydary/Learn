<?php
$count = 12;
$password = '';
$Cryptography = "012345*6789abc+defghij.klmno!p@q#r5s^t&u*v<9w>)x<yz(_AB`CD~EF\GHIJKLMNOPQRSTUVWXY>Z";
$a = str_split($Cryptography);
shuffle($a);
for ($i = 0; $i < $count; $i++)
{
    $password .= $a[$i];
}
echo "<pre>";
var_dump($password);
echo "</pre>";