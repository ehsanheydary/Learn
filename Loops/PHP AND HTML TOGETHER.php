<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        td , th
        {
            border : 1px solid #fed403;
        }
    </style>
</head>

<body>
    <?php
    $Max = 10;
    $p = 0;
    $T = 2;
    $result = 0;
    echo "<table style='width:250px;height:250px;text-align:center;border: 10px solid #808080;'>";
    echo "<thead>";
    echo
    "<tr >
     <th > P </th> 
     &nbsp;&nbsp;&nbsp;
     <th > P^T </th> 
     </tr>";
    echo "</thead>";
    while ($p <= $Max) {
        $result = $p ** $T;
        echo "<tr >";
        echo "<td >" . $p . "</td >";
        echo "<td >" . $result . "</td>";
        echo "</tr>";
        $p++;
    }
    echo "</table>";

    ?>
</body>
</html>
