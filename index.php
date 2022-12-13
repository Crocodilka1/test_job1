<?php
session_start();

header('Content-Type: text/html; charset=UTF8');
error_reporting(E_ALL);

ob_start();

$mode = isset($_GET['mode']) ? $_GET['mode'] : false;
$user = isset($_SESSION['user']) ? $_SESSION['user'] : false;
$err = array();

define("KEY", true);

include './config.php';
include './funct.php';
include './bd.php';

switch($mode) {
	case 'reg':
	include './reg/reg.php';
	include './reg/reg_form.html';
	break;
	
	case 'auth':
	include './auth/auth.php';
	include './auth/auth_form.html';
	include './auth/show.php';
	break;
}

$content = ob_get_contents();
ob_end_clean();

include './index.html';
?>