<?php
declare(strict_types = 1); // میتوان نوع پارامتر ورودی را برا فانکشن تعریف کرد
function &get_element(&$array ,int $index)
{
    return $array[$index];
}