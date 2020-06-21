<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" class="form-control" id="Password" name="Password">
                </div>
                <div class="checkbox">
                    <label for="Password"><input type="checkbox" />Remember me</label>
                </div>
                <button type="submit" class="btn btn-success">Ok</button>
            </form>
            <br>
            <hr>
            <br>
            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" class="form-control" id="Password" name="Password">
                </div>
                <div class="checkbox">
                    <label for="Password"><input type="checkbox" />Remember me</label>
                </div>
                <button type="submit" class="btn btn-success">Ok</button>
            </form>
            <br>
            <hr>
            <br>
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">

                    <label for="Password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="Password" class="form-control" id="Password" name="Password">
                    </div>
                </div>
                <div class="checkbox">
                    <label for="Password" class="control-label"><input type="checkbox" />Remember me</label>
                </div>
                <button type="submit" class="btn btn-success">Ok</button>
            </form>
            <br>
            <hr>
            <br>
            <form action="">
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
                </div>
                <div class="checkbox-inline">
                    <label for="set"><input type="checkbox" id="set" name="set">Option 1</label>
                </div>
                <div class="checkbox-inline">
                    <label for="set1"><input type="checkbox" id="set1" name="set1">Option 2</label>
                </div>
                <div class="checkbox-inline">
                    <label for="set2"><input type="checkbox" id="set2" name="set2">Option 3</label>
                </div>

                <div class="radio">
                    <label for="set3"><input type="radio" id="set3" name="set">Option 1</label>
                </div>
                <div class="radio">
                    <label for="set4"><input type="radio" id="set4" name="set">Option 2</label>
                </div>
                <div class="radio">
                    <label for="set5"><input type="radio" id="set5" name="set">Option 3</label>
                </div>
            </form>
            <br>
            <hr>
            <br>
            <div class="form-group">
                <label for="select">select list</label>
                <select name="" id="select" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="form-group has-success has-feedback">
                <label for="cloud">Cloud</label>
                <input type="text" class="form-control" id="cloud">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
        </div>


        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>