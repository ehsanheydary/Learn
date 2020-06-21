<?php
setcookie('SampleCookie',10 , time() + 15);
if(!isset($_GET['CheckCookie']))
{
header('location:setcookie.php?CheckCookie');
$f = true;
}
if(isset($_COOKIE['SampleCookie']))
{
    echo '<pre>';
    var_dump($_COOKIE);
    echo'</pre>';

}
else
{
    echo 'Cookie Are Disabled';
}