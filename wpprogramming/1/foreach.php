<?php
    include "functions.php";
    $Users = Get_Users();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreach</title>
    <style>
        table , tr ,th , td
        {
            border: 1px solid #fed403;
        }
    </style>
</head>
    <body>
        <table>
            <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
            </tr>
        <?php foreach ($Users as $user): ?>
            <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <a href="#">delete</a>
                        <a href="#">edit</a>
                        <a href="#">approve</a>
                    </td>
            <tr/>
        <?php endforeach; ?>

        </table>
    </body>
</html>
