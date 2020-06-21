<?php
$a = 10;
$b = 20;
$c = 30;
$varname = "a";
echo $$varname;
echo "<br/>";
$array = ["a", "b","c"];
foreach ($array as $variable)
{
    echo "<pre>";
    var_dump($$variable);
    echo "</pre>";
}
$vars = get_defined_vars();
echo "<pre>";
print_r($vars);
echo "</pre>";