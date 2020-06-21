<?php
function get_value($param , $defult = null)
{
    if(isset($_POST[$param]))
    {
        $value = $_POST[$param];
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