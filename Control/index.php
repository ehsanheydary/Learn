<?php
$start_time = 8;
$end_time = 16;
$array1 = array("sib" , "moz" ,"Portoghal" => "portoghal" , "angoor" ," annas");
$array2 = array("Apple" , "Banana" ,"Orange" => "Orange" , "Graps" , "Pineapple" , $array1);
$string="Apple ,Banana , Orange , Graps ,Pineapple";
$time = date("H:i:s");
echo $time;
echo "<br/>";
if($start_time <= $time)
{
     foreach ($array2 as $x =>$y)
     {
         print_r($x);
         echo "<br/>";
         print_r($y);
         echo "<br/>";
     }
     echo "<pre>";
    print_r($array2);
    echo "</pre>";
}
else if($end_time <= $time)
{
    echo "Good Job";
}
echo "<br/>" . "   ";
echo $array2[4]["Portoghal"];