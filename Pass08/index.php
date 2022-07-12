<?php 

$referer = $_SERVER['HTTP_REFERER'];
$xff =$_SERVER['HTTP_X_FORWARDED_FOR'];

if ($xff === "123.123.123.123"){
    if ($referer === "https://www.google.com"){
        echo 'flag{xxccvvbbnn}';
    } else{
        echo '必须来自https://www.google.com';
    }
}else{
    echo 'ip地址必须为123.123.123.123';
}



?>