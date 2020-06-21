<?php
function unsetcookie($name)
{
    setcookie($name,0,time() -1);
    unset($_COOKIE[$name]);
}
unsetcookie('username');