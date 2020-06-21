<?php
//قرارداد همیشه توابعی که به صورت بولین تعریف میشوند و مقدار برگشتی دارند بهتر است با ایز شروع شود
function Is_User_Logged_In()
{
    return "null";
}
function Select_Background($Background)
{
    switch ($Background)
    {
        case "Red":
            return '#fe5424';
            break;
        case "Green" :
            return "#54fe24";
            break;
        case "Blue" :
            return "#5424fe";
                break;
        default :
            return "#9e9e9e";
            break;
    }
}
function Get_Users()
{
   return array
    (
        array("id" => "1" , "name" => "Ehsan" , "email" => "Ehsan@gmail.com"),
        array("id" => "2" , "name" => "Ali" , "email" => "Ali@gmail.com"),
        array("id" => "3" , "name" => "Hasan" , "email" => "Hasan@gmail.com"),
        array("id" => "4" , "name" => "Hosein" , "email" => "Hosein@gmail.com"),
        array("id" => "5" , "name" => "Reza" , "email" => "Reza@gmail.com"),
        array("id" => "6" , "name" => "Banafshe" , "email" => "Banafshe@gmail.com"),
        array("id" => "7" , "name" => "Athena" , "email" => "Athena@gmail.com")
    );
}
?>