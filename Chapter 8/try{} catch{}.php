<?php
try
{
$x = 0;
$y = inverse($x);
}
catch(Exception $e)
{
    $y = 'undifined';
}
finally {
    echo 'inverse of $x is ' . $y;
}
function inverse($x)
{
    if($x ==0)
    {
        throw new Exception('Division by zero.');
    }
   return 1 /$x;
}
