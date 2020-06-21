<?php
function get_value($param , $defult = null)
{
    if(isset($_GET[$param]))
    {
        $value = $_GET[$param];
    }
    else
    {
            $value = $defult;
    }
    return $value;
    /*
    if(!function_exists("title"))
    {
        function title()
        {
            echo ''
        }
    }
    */
}