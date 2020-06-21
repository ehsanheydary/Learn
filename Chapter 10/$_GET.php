<?php
if(isset($_GET['name']))
{
    $x = $_GET['name'];
}
else
{
    $x = 'World';
}
if(isset($_GET['color']))
{
    $c = $_GET['color'];

}
else
{
    $c = 'Black';
}
    echo '<p style="color: ' .$c. ' ;">' . 'Hello ' . $x . '</p>';