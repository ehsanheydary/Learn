<?php
require_once('Functions.php');
$name = get_value('name','World');
$color = get_value('color','red');
echo '<p style="color: '.$color.';">' . 'Hello '. $name. '</p>';