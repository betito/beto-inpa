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
	
	$conn = Connect();
	$res = mysql_query($command) or die ("Erro no Mysql...");
	
	if (!($res)) {
		print ("ERRO :: " . mysql_error());
		return null;
	}

	return $res;
	
}






?>