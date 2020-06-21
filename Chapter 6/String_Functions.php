<?php
/**
 *
 */
$StringFunctions = "Welcome To Php programming Course";
echo strtolower($StringFunctions);
echo "<br/>";
echo "<br/>";
echo strtoupper($StringFunctions);
echo "<br/>";
echo "<br/>";
echo strrev($StringFunctions);
echo "<br/>";
echo "<br/>";
$pos1 = strpos($StringFunctions,"e");
$pos2 = strpos($StringFunctions,"e",$pos1 +1);
$word = substr($StringFunctions,$pos1 +1,$pos2 - $pos1);
echo $word;