<?php
// session_set_cookie_params(60);
session_start();
setcookie(session_name(),session_id(),time() + 60);
$_SESSION['a'] = 10;
$_SESSION['b'] = 20;
print_r($_SESSION);