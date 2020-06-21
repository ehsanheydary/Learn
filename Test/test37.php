<?php
$q = array('w'=>'ali','f'=>'hasan') ;
$qz = array('w'=>'2') ;
$c = array($q,$qz);
$a = array('a'=>'amir','b'=>20,'c'=>$c);

echo json_encode($a);
