<?php
$a = 10;
$str = <<<heredoc
        my heredoc string goes here
        having single quotation '
        as well as a double quotation "
        also expanding  variables for example
        \$a = $a
heredoc;
echo "<pre>";
echo $str;
echo "</pre>";
