<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="base.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="content">
    <ul class="cols ltr">
        <li class="m20"><input style="width: 500px;" id="search" placeholder="Type key words here" value="" autocomplete="off"></li>
        <li class="m20"><div style="width: 500px;height: 500px;" id="preview"></div></li>
    </ul>
</div>
</body>
</html>
<script>
    $(function ()
    {
        $('#search').on('keyup',function (){
            var value = $(this).val();
            $.ajax('feed.php',{
                type : 'post',
                dataType : 'json',
                data : {
                    keyword : value
                },
                success : function(data){
                    $('#preview').text(data['aaa']);
                }
            });
        });
    });

</script>