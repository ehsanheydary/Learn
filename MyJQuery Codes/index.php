<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="base.css">
        <script src="js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <ul class="cols ltr">
            <li class="m20"><input style="width: 500px;" id="search" placeholder="Type your key word"></li>
            <li class="m20"><div style="width: 500px;height: 500px;" id="preview"></div></li>
        </ul>
    </body>
</html>
    <script>
        $(function ()
        {
            var  words = ['hello' , 'how' , 'alarm' , 'abort' , 'axe' , 'plus' , 'accessor' , 'row' , 'cow' , 'car' , 'cat' , 'processor'];

            $('#search').on('keyup',function ()
            {
                var value = $(this).val();
                var matches = [];
                words.forEach(function (item)
                {
                    if(item.indexOf(value) > -1)
                    {
                        matches.push(item);
                    }
                });
                var html = "";
                matches.forEach(function (item) {
                    html += item + "<br/>";
                });
                $('#preview').html(html);
            });
        });

    </script>