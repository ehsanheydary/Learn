<?php

$A = 1;
$B = $A++;
echo "Postfix Assignment .<br/> A is " . $A . "<br/>" . "B is " . $B . "<br/>";
$a = 1;
$b = ++$a;
echo "Prefix Assignment .<br/> a is " . $a . "<br/>" . "b is " . $b;


$a = 12;

$b = 6;

isset($c)? $b : $a;

$safine = $a <=> $b;

echo '<br/> safine is ' .  $safine;

$a ?? $b;