<?php include "functions.php";
$Users = Get_Users();
$Template = " Hello Dear #name# {email}";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($Users as $user):

    ?>
    <?php $template = str_replace(array('#name#','{email}'),array($user['name'],$user['email']),$Template); ?>
        <p><?php echo $template; ?></p>
    <?php endforeach; ?>
</body>
</html>