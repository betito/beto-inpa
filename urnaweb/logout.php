<?php
include_once 'functions.php';
if (is_session_started () == FALSE) {
	
	session_start();

	session_unset();
	
}

unset($_SESSION);

?>

<meta http-equiv="refresh" content="0;url=./index.php">
