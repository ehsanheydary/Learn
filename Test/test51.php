<?php
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$name = rand(1000,9999);
$type = $temp[1];
$newFileName = $name.'.'.$type;


if($type=='jpg') {
    $target_file = "ua/" .$newFileName;
    if (file_exists($target_file)){
        echo 'file mojod ast';
    }else {
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
        } else {
            if(   move_uploaded_file(
                $_FILES["fileToUpload"]["tmp_name"],
                $target_file)
            ){
                echo 'ok';
            }
        }
    }
}else{
    echo 'error';
}

















?>