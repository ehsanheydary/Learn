<?php
include_once 'Functions.php';
$color = GetOption('$color');
$font_size = GetOption('$font_size');
$background = GetOption('$background');
$width = GetOption('$width');
$height = GetOption('$height');
$site_url = GetOption('$site_url');
$site_title =GetOption('$site_title');

?>
<html>
    <head>
        <title>SQLite 3  -- Test</title>
        <style>
        .Container
        {
            color:<?php echo $color;?>;
            background:<?php echo $background;?>;
            font-size:<?php echo $font_size;?>;
            width: <?php echo $width; ?>;
            height: <?php echo $height; ?>;
        }
        .Container a
        {
            color: inherit;
            text-decoration: none;
        }
        </style>
    </head>
    <body>
        <div class="Container">
            <a class="Link" href="<?php echo $site_url; ?>">
                <?php echo $site_title; ?>
            </a>
        </div>
    </body>
</html>
