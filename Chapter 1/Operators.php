<?php
$A = 1;
$B = $A++;
echo "Postfix Assignment .<br/> A is " . $A . "<br/>" . "B is " . $B . "<br/>";
$A = 1;
$B = ++$A;
echo "Postfix Assignment .<br/> A is " . $A . "<br/>" . "B is " . $B;
?>