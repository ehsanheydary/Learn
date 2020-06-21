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
    <div id="content ltr">
        <span class="colored red">Sample 1</span>
        <span class="colored green">Sample 2</span>
        <span class="colored blue">Sample 3</span>
        <span class="colored red">Sample 4</span>
        <span class="colored blue">Sample 5</span>

        <div id="comments" class="m20 p20">
            <span class="btn-link m20 p20" id="add-comment">Add Comment</span>

            <div id="sticky">My name is sirish</div>
        </div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
        <div>hello World</div>
    </div>
    </body>
</html>
    <script>
        $(function()
            {
                $('.red').each(function() {
                    $(this).css('color' , '#f00');
                });
                $('.blue').each(function() {
                    $(this).css('color' , '#00f');
                });
                $('.green').each(function() {
                    $(this).css('color' , '#0f0');
                });

                $('.colored').each(function () {
                    if($(this).css('color') == 'rgb(0, 255, 0)')
                    {
                        $(this).css('background-color' , '#08f');
                    }
                    });
                $('.colored').on('mouseover',function () {
                    $(this).data('oldColor' , $(this).css('background-color'));
                   $(this).css('background-color','#000');
                });

                $('span').css('padding','10px');

                $('.colored').on('mouseout',function () {
                    var oldColor = $(this).data('oldColor');
                    $(this).css('background-color',oldColor);
                });

                $('#add-comment').on('click' ,function () {
                    var $div = $('<div style="line=height : 30px;"></div>');
                    var $removeBtn = $('<span class="btn-link">Remove</span>');
                    var $commentBody = $('<span>This is a comment</span>');
                    $removeBtn.on('click',function () {
                       alert('a');
                    });

                    $div.append($removeBtn);
                    $div.append($commentBody);

                    $('#comments').append($div)
                });
                $(window).on('scroll',function ()
                {
                    var top = $(window).scrollTop();
                    $('#sticky').animate({
                        top: top + 'px'
                    } , 100);
                });
            });
    </script>