<?php
$a = [1 => "Ehsan" ,2 => "Reza" ,3 =>  "Afshin" ,4 =>  "Behnam",5 => "Artin"];
$b = [1 => "Kavoos" ,2 => "Kamyar" ,3 => "Kiyarash" , 4 => "Diyana" ,5 => "Javid"];

$c = $a + $b;
echo '<pre> $a union $b <br/>';
print_r($c);
echo "</pre>";

$c = $b + $a;
echo '<pre> $b union $a <br/>';
print_r($c);
echo "</pre>";

$c = array_merge($a,$b);
echo "<pre> array_merge <br/>";
print_r($c);
echo "</pre>";


//قابل استفاده است php این حالت در تمامی نسخه های
$a1 = array
(
    '9logy' => 'Technology platform',
    '6' => 2,
    'nowlogy' => 9,
    24,
    'url' => 'https://9logy.com',
    'services' => array
    (
        'web-design' => true,
        'seo' => true,
        'windows-programming' => true,
        'web-programming' => true,
    )
);

//قابل استفاده است php این حالت در تمامی نسخه های
$a1 = array
(
    '9logy' => 'Technology platform $a1' ,
    '6' => '2 $a1' ,
    'nowlogy' => '9 $a1' ,
    24 ,
    'url' => 'https://9logy.com $a1' ,
    'services' => array
    (
        'web-design' => true ,
        'seo' => true ,
        'windows-programming' => true ,
        'web-programming' => true ,
    )
);

//قابل استفاده است php این حالت در تمامی نسخه های
$a2 = array('9logy'=>'Technology platform $a2' ,'6'=>'2 $a2' ,'nowlogy'=>'9 $a2' , '24 $a2');

$a3 = $a1 + $a2;

echo '<br/>';

echo '<pre>';
var_dump($a3);
echo '</pre>';

$a3 = array_merge($a1 , $a2);
echo '<br/>';

echo '<pre>';
var_dump($a3);
echo '</pre> <br/>';
echo 'count function $c <br/>';
echo '<pre>';
var_dump(count($a3,1));
echo '</pre>';
?>