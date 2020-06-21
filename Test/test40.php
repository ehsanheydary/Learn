<?php $post1 = array('id'=>'2','text'=>'salam');
$post2 = array('id'=>'3','text'=>'khobi');
$sumPost = array($post1,$post2);
$comment1 = array('id'=>'12','postId'=>'3','text'=>'testComment');
$comment2 =  array('id'=>'13','postId'=>'2','text'=>'salam khobi?');
$sumComment=array($comment1,$comment2);
$b = array('post'=>$sumPost,'comments'=>$sumComment);
$a = array('name'=>'amir','family'=>'jahangiri','data'=>$b);
echo json_encode($a);

