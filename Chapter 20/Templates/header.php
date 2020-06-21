<!DOCTYPE html>
<html lang="Fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php
    if(!function_exists('GetTitle'))
    {
        function GetTitle()
        {
            return APP_TITLE;
        }
    }
    ?>

    <title><?php GetTitle(); ?></title>

    <!-- Bootstrap -->
    <link  rel="stylesheet"  href="<?php echo SITE_URL; ?>Includes/BootStrap/css/bootstrap-rtl.css"/>
    <link rel="stylesheet"  href="<?php echo SITE_URL; ?>Includes/BootStrap/css/bootstrap-rtl-theme.css"/>
    <!-- Additional CSS -->
    <link rel="stylesheet"  href="http://localhost:23001/Chapter%2020/styles.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif] -->
</head>
<body>
