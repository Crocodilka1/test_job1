<?php
if(!defined('KEY')) {
	header("HTTP/1.1 404 Not Found");
	exit(file_get_contents('./404.html'));
}

$db_connect = pg_connect("host = " . DBSERVER . " port = " . DBPORT . " dbname = " . DATABASE . " user = " . DBUSER . " password = " . DBPASSWORD) or die(ERROR_CONNECT);

define("CONNECT", $db_connect);

pg_query("SET NAMES utf8");
pg_query("set character_set_client='utf8'");
pg_query("set character_set_results='utf8'");
pg_query("set collation_connection='utf8_general_ci'");

?>