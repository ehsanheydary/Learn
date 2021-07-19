<?php
declare(strict_types = 1); // میتوان نوع پارامتر ورودی را برا فانکشن تعریف کرد
function &get_element(&$array ,int $index) : int
{
    return $array[$index];
}
$arr = array(1 , 5 ,6 , 8 , 48 , 86 ,846);
$a = 4;
$i = 2;
echo '<pre>';
var_dump(get_element($a , $i));
echo '</pre>';
