<?php include "functions.php";
$bg = "#767070";
if (isset($_POST['send']) && isset($_POST['background']))
{
    $bg = Select_Background($_POST['background']);
//    $d = var_dump($_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: <?php echo $bg ?>;">
    <!--   قرار داد برای ساختار های تصمیم از تگ های باز و بسته بیشتر استفاده کنید و در هر خط به صورت جدا گانه کد ها نوشته شوند تا خانایی بیشتر شود -->
<!--    --><?php //if(Is_User_Logged_In()): ?>
<!--        <p>خوش امدید</p>-->
<!--    --><?php //else: ?>
<!--        <p>لطفا وارد شوید</p>-->
<!--    --><?php //endif; ?>

<?php
//$User = Is_User_Logged_In();
//    switch ($User)
//    {
//        case true : ?>
<!--        <p>خوش امدید</p>-->
<!--        --><?php //break;
//        case false : ?>
<!--        <p>لطفا وارد شوید</p>-->
<!--        --><?php //break;
//        default : ?>
<!--        <p>ابتدا یک حساب کاربری ایجاد کنید</p>-->
<!--        --><?php //break;
//    }
//?>



    <form action="" method="post">
        <input type="radio" name="background" value="Red">Red
        <input type="radio" name="background" value="Green">Green
        <input type="radio" name="background" value="Blue">Blue
        <input style="background-color : #000000;color : #ffffff;" type="submit" name="send">
    </form>

</body>
</html>