<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My First PHP Application</title>
    </head>
    <body>
        <?php
        $a=4;
        $b=6;
        $c=$a+$b;
        $array=[1,2,3];
        $n=null;
        $float=2.6;
        if($a!=$b and $c== 10)
        {
            echo "it's a tester for AND";
        }
        if(is_null($n))
        {
            echo "<br/>";
            echo gettype($array)."<br/>";
        }
        echo "Hello World";
        echo "<br/>";
        echo "Welcome to php programming course";
        echo "<br/>";
        echo "vaiable a plus variable b come to".$c.".";
        /*
         * this method give us information about our host
         */
        phpinfo();
        ?>
    </body>
</html>
