<?php
$out = array();
$out['aaa'] = "Keyword is : ". $_POST['keyword'];
$out['status'] = 1;
echo json_encode($out);
?>