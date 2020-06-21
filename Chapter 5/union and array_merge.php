<?php
$a = [1 => "Ehsan" ,2 => "Reza" ,3 =>  "Afshin" ,4 =>  "Behnam"];
$b = [5 => "Kavoos" ,6 => "Kamyar" ,7 => "Kiyarash" ,8 => "Diyana" ,9 => "Javid"];
$c = $a + $b ;
echo "<pre>";
print_r($c);
echo "</pre>";
echo "<br/>";
$c = $b + $a;
echo "<pre>";
print_r($c);
echo "</pre>";
$c = array_merge($b,$a);
echo "<pre>";
print_r($c);
echo "</pre>";
?>