<?php
session_start();
CreateImage();
exit();
function CreateImage()
{
    $Md5Hash = md5(rand(0,999));
    $SecurityCode = substr($Md5Hash , 15 , 5);
    $_SESSION['captcha'] = $SecurityCode;
    $Width = 60;
    $Height = 30;
    $Image = ImageCreate($Width , $Height);
    $Color = ImageColorAllocate($Image , 0,0,0);
    $Back = ImageColorAllocate($Image , 255,255,255);
    ImageFile($Image ,0,0,$Back);
    ImageString($Image , 10 ,7 ,7 , $SecurityCode , $Color);
    header('Content-type: image/jpeg');
    ImageJpeg($Image);
    ImageDestroy($Image);

}