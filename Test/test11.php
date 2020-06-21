<?php
$age = array(
    "Peter"=>"35",
    "Ben"=>"37",
    "Joe"=>"43"
);

foreach ($age as $xaa=>$yaa){
    if($yaa>36){
        echo '<br>';
        echo $xaa;
    }
}