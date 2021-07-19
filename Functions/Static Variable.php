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
    static $counter = 0;
    $counter++;
    if($counter > 5)
    {
        echo '<p style="color: #ff0000;">The function call limit exceeded.</p>';
        return;
    }
    echo $counter;
    echo '<br/>';
}
multiplay();