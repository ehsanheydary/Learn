<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/adapters/jquery.js"></script>
</head>
<body>
    <div style="width: 900px;">
        <textarea name="" id="editor"></textarea>
    </div>
    <script>
        $(document).ready(function(){
            $('#editor').ckeditor({
                language : 'fa'
            });
        });
    </script>
</body>
</html>