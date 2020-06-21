<?php
if(isset($_GET['username']) && !empty($_GET['username']) && $_GET['username'] != '')
{
    $username = $_GET['username'];
    setcookie('username' , $username , time() + 7*24*60*60);
    $_COOKIE['username'] = $username;
}
if(isset($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
    $returned = true;
}
else
{
    $username = '';
    $returned = false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Tester</title>
</head>
<body>
    <?php if($returned):?>
    <!-- Returning Visitor -->
    <p>Welcome Back , dear <?php echo $username; ?> </p>
    <?php else: ?>
        <!-- New Visitor -->
    <p>Welcome to our web site dear</p>
        <form action="CookieTester.php" method="get">
            <input type="text" name="username" value="" placeholder="You'r Name">
            <input type="submit" value="submit">
        </form>
    <?php endif; ?>
</body>
</html>