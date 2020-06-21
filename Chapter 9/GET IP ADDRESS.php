<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get Ip Address</title>
</head>
<body>
    <p >You'r Ip Address Follows.</p>
    <div style="background-color: #cccccc; border:1px solid #999;font-weight: 700;font-size: 16pt;padding: 5px;">
        You'r Ip Address Is : <span style="color:red"><?php echo $_SERVER['REMOTE_ADDR']; ?></span>
    </div>
</body>
</html>