<?php
$StringMembers = "Welcome to php!";
for($i=0;$i<strlen($StringMembers);$i++)
{
    echo $i . "=>" . $StringMembers[$i] . "<br/>";
}