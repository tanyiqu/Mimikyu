<h1>Ping test</h1>
<form method="POST">
    IP:
    <input name="command" type="text" placeholder="baidu.com"/>
    <input name="ping" type="submit"/>
</form>
<?php


if(!isset($_POST['command'])) {
    show_source(__FILE__);
    die();
}


$command = $_POST['command'];
if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
    $command = shell_exec( 'ping  ' . $command );
}
else {
    $command = shell_exec( 'ping  -c 2 ' . $command );
}

echo "<pre>{$command}</pre>"

?>


