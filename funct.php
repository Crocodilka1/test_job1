<?php
if(!defined("KEY")) {
	header("HTTP/1.1 404 Not Found");
	exit(file_get_contents('./404.html'));
}

function escape_str($data) {
	if(is_array($data)) {
		$strip_data = array_map("stripslashes", $data);
		$result = array_map("mysql_real_escape_string", $strip_data);
		return $result;
	}
	else {
		$data = stripslashes($data);
		$result = mysql_real_escape_string($data);
		return $result;
	}
}



?>