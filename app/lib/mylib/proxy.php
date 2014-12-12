<?php
header("Content-type: text/javascript; charset=utf-8");
$c = $_POST['a'];
$s = file_get_contents('http://yourdomain.com/json/' . $c . '.json');
header("Access-Control-Allow-Origin: *");
echo $_GET['callback'] . '(' . $s . ');';
?>