<?php
$n = 100000;
$f1 =0;
$f2 =0;
$f3 =0;
$f4 =0;
$f5 =0;
$f6 =0;
for ($i= 0; $i<$n ; $i++)
{
    $r= rand(1,6);
    switch ($r)
    {
        case 1:$f1++;
        break;
        case 2:$f6++;
            break;
        case 3:$f5++;
            break;
        case 4:$f4++;
            break;
        case 5:$f3++;
            break;
        case 6:$f2++;
            break;
    }
}
$f = array("1"=>$f1,"2"=>$f2,"3"=>$f3,"4"=>$f4,"5"=>$f5,"6"=>$f6);
foreach ($f as $x=>$y)
{
print_r($x);
    echo "<br/>";
print_r($y);
    echo "<br/>";
}
