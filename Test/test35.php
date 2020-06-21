<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/1/2018
 * Time: 9:42 PM
 */

$aaa= '111';
$passwordHash = hash('SHA512',$aaa);
$passwordHash = hash('SHA1',$passwordHash);
$passwordHash = hash('MD5',$passwordHash);
$passwordHash = hash('SHA512',$passwordHash);
$passwordHash = hash('SHA1',$passwordHash);
$passwordHash = hash('SHA512',$passwordHash);

echo $passwordHash;
