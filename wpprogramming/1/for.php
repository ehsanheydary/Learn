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
    <title>Document</title>
    <style>
        table
        {
            border-collapse : collapse;
        }
        table , th , tr , td
        {
            border : 1px solid #fed403;
        }
    </style>
</head>
<body>
<!--    --><?php
//    for ($i=0;$i<10;$i++)
//        for ($k=0;$k<5;$k+2):
//            echo "<p>$k</p>";
//        endfor;
//    ?>

<!--    --><?php
//        for ($i=0;$i<=count($Users) -1;$i++):
//        $user = $Users[$i];
//        var_dump($user);
//        echo "</br>";
//        endfor;
//    ?>



    <table>
    <?php for ($i=0;$i<10;$i++) : ?>
            <tr style="">

                <?php for ($c=0;$c<5;$c++) : ?>
                    <?php $red = mt_rand(0,255) ?>
                    <?php $green = mt_rand(0,255) ?>
                    <?php $blue = mt_rand(0,255) ?>
                    <?php $red2 = mt_rand(0,255) ?>
                    <?php $green2 = mt_rand(0,255) ?>
                    <?php $blue2 = mt_rand(0,255) ?>
                    <?php $bg_color = "rgb(" . $red . ',' . $green . ',' . $blue . ')'; ?>
<!--                    --><?php //$color = "rgb(" . $red2 . ',' . $green2 . ',' . $blue2 . ')'; ?>
                    <td  style="background-color : <?php echo $bg_color; ?>;">
                        <a href="#" style="text-decoration: none; color : #212121;" ><?php echo $bg_color; ?></a>
                    </td>
                <?php endfor; ?>
            </tr>

    <?php endfor;     ?>
    </table>
</body>
<script>

</script>
</html>