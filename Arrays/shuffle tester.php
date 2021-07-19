<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
$count = 12;
$password = '';
$Cryptography = '012345*6789abc+defghij.klmno!p@q#r5s^t&u*v9w>)xyz(_AB`CD~EF\GHIJKLMNOPQRSTUVWXY>Zضثصضثن';
$a = str_split($Cryptography);
shuffle($a);
echo "<pre>";
var_dump($a);
echo "</pre>";
for ($i = 0; $i < $count; $i++)
{
    $password .= $a[$i];
}

echo "<pre>";
var_dump($password);
echo "</pre>";


?>

</body>
</html>
