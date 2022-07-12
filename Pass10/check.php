<?php
$u = $_POST['username'];
$p = $_POST['password'];

if ($u === 'admin' && $p === '1234567'){
    die('flag{xxccvvbbnn}');
} 

header('Location:index.php')

?>