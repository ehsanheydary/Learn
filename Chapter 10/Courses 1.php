<?php
require_once("Functions 1.php");
$m = get_value('math',0);
$p = get_value('prog',0);
if($p && $m)
{
    $title = 'Mathematics And Programming Courses';
}
else if($m)
{
    $title = 'Mathematics Courses';
}
else if($p)
{
    $title = 'Programming Courses';
}
else
{
    $title = 'Courses';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>
    <h1>Recommended Courses</h1>
    <?php if($m):?>
    <h2>Math Courses</h2>
    <ul>
        <li>General Mathematics I</li>
        <li>General Mathematics II</li>
        <li>Differential Equations</li>
        <li>Numerical Methods</li>
        <li>Engineerig Mathematics</li>
        <li>Discrete Mathematics</li>
    </ul>
    <?php endif;if($p): ?>
    <h2>Programming Courses</h2>
    <ul>
        <li>C/C++ Programming</li>
        <li>Assembly Programming</li>
        <li>C# Programming</li>
        <li>PHP Programming</li>
        <li>Java Programming</li>
    </ul>
    <?php endif; if(!$p && !$m):?>
    <p>Sorry! There is not any recommended courses for your right now</p>
    <?php endif;?>
    <a href="Request_Courses 1.php">Request Courses</a>
</body>
</html>