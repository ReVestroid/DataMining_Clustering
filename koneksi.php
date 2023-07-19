<?php
$host = "mysql";
$user = "user";
$pass = "user";
$db   = "application_db";

try {
	$kon = mysqli_connect($host, $user, $pass, $db);
} catch (\Throwable $th) {
	var_dump($th);
}
function getMyUrl()
{
	$protocol = (!empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')) ? 'https://' : 'http://';
	$server = $_SERVER['SERVER_NAME'];
	$port = $_SERVER['SERVER_PORT'] ? ':' . $_SERVER['SERVER_PORT'] : '';
	return $protocol . $server . $port;
}
