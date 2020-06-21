<?php
$str = "Welcome to php 1396 Esfand 8";
$n = 11;
printf("The number is %d",$n);
$resultstr = sprintf("The number is %d",$n);
echo "<br/>";
var_dump($resultstr);
echo "<br/>";
list($Str1,$Str2,$Str3,$decimal4,$str5,$decimal6) = sscanf($str,"%s %s %s %d %s %d");
echo $Str1;