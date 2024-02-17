<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    
<h1>请用GET方式提交一个名为1,值为2的变量</h1>

<?php

if(!isset($_GET[1])){
    die();
}
if($_GET[1] === '2'){
    echo 'flag{xxccvvbbnn}';
}
?>

</body>
</html>
