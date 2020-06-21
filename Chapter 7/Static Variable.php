<?php
$k = 18;
$g = 1;
$d = 10;
multiplay();
multiplay();
multiplay();
multiplay();
multiplay();
multiplay();
multiplay();
multiplay();

function multiplay()
{
    static $counter;
    $counter++;
    if($counter > 5)
    {
        echo '<p style="color: red;">The function call limit exceeded.</p>';
        return;
    }
    echo $counter;
    echo '<br/>';
}
multiplay();