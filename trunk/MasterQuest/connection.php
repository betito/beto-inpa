<?php


function Connect (){

	include 'connection_data.php';
		
	$conn = mysql_connect($server, $user, $pass) or die ('Erro ao conectar com servidor.');
	if (!$conn) {
		die ('Erro no Connect :: ' . mysql_error());
	}
	mysql_select_db($database);
	
	return $conn;
	
}


function Query ($command) {
	
	$res = mysql_query($command);
	
	return $res;
	
	
}






?>