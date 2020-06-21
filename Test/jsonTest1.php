<?php
$post1 = array("id" => 2,"text" =>"salam");
$post2 = array("id" => 3,"text" => "Khobi");
$sumpost = array($post1 , $post2);
$ccomment1 = array("id" => 12 , "postid" => 2 , "text" => "Test comment 1");
$ccomment2 = array("id" => 13 , "postid" => 3 , "text" => "Salam Khobi 2");
$sumcomments = array($ccomment1 , $ccomment2);
$Data =array("Post" => $sumpost ,"Comments" => $sumcomments);
$js = array("FirstName" => "Ehsan" , "LastName" => "Heydari" ,"Data" => $Data);
echo json_encode($js);