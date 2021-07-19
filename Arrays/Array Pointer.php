<?php
$a = [4,2,3,78,54,3,5,790];
$c = 0;
while (current($a) !== false)
{
    echo  "Counter" .  ++$c;
    echo "<br/>";
    echo current($a);
    echo "<br/>";
    next($a);
}
echo "<br/>";
var_dump(current($a));
echo "<br/>";
reset($a);
echo "<br/>";
var_dump(current($a));
echo "<br/>";
end($a);
echo "<br/>";
var_dump(current($a));
echo "<br/>";
while (current($a) !== false)
{
    echo "Counter" . --$c;
    echo "<br/>";
    echo current($a);
    echo "<br/>";
    prev($a);
}
var_dump(current($a));
reset($a);
echo "<br/>";
while(list($k , $v) = each($a))
{
    echo "<br/>";
    echo $k . "=>" . $v;
    echo "<br/>";
}