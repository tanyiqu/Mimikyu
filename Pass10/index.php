
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>weak auth</title>
    <style>
        body{
            margin-left:auto;
            margin-right:auto;
            margin-TOP:100PX;
            width:20em;
        }
    </style>
</head>
<body>
<h1>Login</h1>
<form class="form-inline" method="post" action="./check.php">

    <div class="input-group">
        <input style="width:280px;" id="username" type="text" class="form-control" placeholder="username" aria-describedby="basic-addon1" name="username">
    </div>
    <br/>
    <br/>
    <div class="input-group">
        <input style="width:280px;" id="password" type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1" name="password">
    </div>
    <br/>
    <br/>
    <button  style="width:280px;" class="btn btn-default">login</button>

    <br/>
    <br/>
    <button  style="width:280px;" class="btn btn-default" type="reset">reset</button>


</form>

</body>
</html>