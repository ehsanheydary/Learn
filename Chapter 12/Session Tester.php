<?php
session_start();
setcookie(session_name(),session_id(),time() + 60);
echo '<pre>';
print_r($_SESSION);
print_r($_COOKIE);
echo '</pre>';