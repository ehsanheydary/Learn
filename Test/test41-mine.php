<?php
$con = mysqli_connect('localhost','Esi','1ds91Dp9SIkvfC3k','php7');
$selectUser = mysqli_query($con,"select * from users where id = '1'");
$selectUser = mysqli_fetch_assoc($selectUser);
$name = $selectUser['FirstName'];
$lastname = $selectUser['LastName'];
$selectPost = mysqli_query($con , "select * from post");
while ($rowpost = mysqli_fetch_assoc($selectPost))
{
    $postarray[] = array("id" => $rowpost["postId"] , "text" => $rowpost["postText"]);
}
$selectcomments = mysqli_query($con,"select * from comments");
while ($rowcomments = mysqli_fetch_assoc($selectcomments))
{
    $commentsarray[] = array("cmid" => $rowcomments["commentsid"] ,"cmpid" =>$rowcomments["commentspostid"] ,$rowcomments["commentstext"]);
}
$call = array("name" => $name , "lastname"=>$lastname);
$call["data"]["post"] = $postarray;
$call["data"]["comments"] = $commentsarray;
echo json_encode($call);