<?php
if(!defined('KEY')) {
	header("HTTP/1.1 404 Not Found");
	exit(file_get_contents('./404.html'));
}

define('DBSERVER', 'localhost');
define('DBPORT', '5432');
define('DBUSER', 'postgres');
define('DBPASSWORD', '0000');
define('DATABASE', 'test');
define('ERROR_CONNECT', 'Не могу соединиться с БД');
define('NO_DB_SELECT', 'Данная ДБ отутствует');
define('HOST', 'localcost/');

?>