<?php
header('X-Powered-By: JSP',false , 404);
setcookie('headertesting',10,time() + 15);
echo 'Hello World';
echo '<pre>';
var_dump(headers_list());
echo '</pre>';
echo '<br/>';
echo http_response_code(200);
echo '<br/>';
echo http_response_code();