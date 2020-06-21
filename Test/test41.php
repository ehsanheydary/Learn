<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/8/2018
 * Time: 8:03 PM
 */
$conn = mysqli_connect(
    'localhost',
    'free',
    'jLKJfNyuExogcO5d',
    'php7'
);

$selectUser = mysqli_query($conn,
    "SELECT * FROM user WHERE id='1'");
$rowUser = mysqli_fetch_assoc($selectUser);
$name = $rowUser['name'];
$family = $rowUser['family'];

$selectPost = mysqli_query($conn,
    "SELECT * FROM post");
while ( $rowPost = mysqli_fetch_assoc($selectPost))
{
    $postArray[]=
        array('id'=>$rowPost['postId'],
            'text'=>$rowPost['postText']);

}
$comment = mysqli_query($conn,
    "SELECT * FROM comments");
while ($rowComments = mysqli_fetch_assoc($comment)){
    $commetsArray[]=array('id'=>$rowComments['commentsId']
    ,'postId'=>$rowComments['commentsPostId'],
        'text'=>$rowComments['commentsText']);
}

$call=array('name'=>$name,'family'=>$family);
$call['data']['post']=$postArray;
$call['data']['comments']=$commetsArray;
echo json_encode($call);
