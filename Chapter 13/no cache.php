<?php
//header("Expires: Sat,26 Jul 1997 05:00:00 GMT");// Date in the past
$exp_date = date('r',time() - 3600);
header("Cache-Control: no-cache, must-revalidate");// Http/1.1
header("pragma: no cache");
header("Expires: $exp_date");