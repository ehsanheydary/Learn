<?php
$conn = mysqli_connect('localhost','Esi',
    '1ds91Dp9SIkvfC3k','dbdsoon');
$test =
    mysqli_query($conn,"
INSERT INTO jahad (firstname,lastname,StudentNumber)
 VALUES ('reza','torabi',95238302);
 ");
if($test){
    echo 'ok';
}
else{
    echo mysqli_error($conn);
}