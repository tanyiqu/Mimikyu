<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disable</title>
</head>
<body>
<h3>为什么这个按钮不能按呀？？</h3>

<form action="" method="post" >
<input disabled  type="submit" value="flag" name="auth" />
</form>
</body>
</html>

<?php

if(!isset($_POST['auth'])){
    die();
}
if($_POST['auth'] == 'flag'){
    echo 'flag{xxccvvbbnn}';
}

?>