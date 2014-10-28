<?php

function getResearchGroups() {
	$command = "";
	$fields = "id as d1, groupname as d2 ";
	
	$command = sprintf ( "select %s from researchgroup", $fields );
	
	// print ($command) ;
	
	$res = null;
	$res = Query ( $command );
	
	if (! ($res)) {
		
		print (mysql_error ()) ;
	} /*
	   * else { print ("<br/><br/>funfou...<br/><br/>") ; }
	   */
	
	return $res;
}
function getAgreements() {
	$command = "";
	$fields = "id as d1, name as d2, convenente as d3 ";
	$table = "agreement";
	
	$command = sprintf ( "select %s from %s", $fields, $table );
	
	// print ($command) ;
	
	$res = null;
	$res = Query ( $command );
	
	if (! ($res)) {
		
		print (mysql_error ( $res )) ;
	} /*
	   * else { print ("<br/><br/>funfou...<br/><br/>") ; }
	   */
	
	return $res;
}
function verificarAutenticacao($email, $pass) {
	$conn = Connect ();
	$tmp = md5 ( $pass );
	$command = "select email from autor where email like '$email' and password like '$tmp'";
	
	$res = Query ( $command );
	
	$data = mysql_fetch_assoc ( $res );
	if ($data ['email'] == $email) {
		return 1;
	} else {
		return 0;
	}
}
function verificarAutenticacaoAdm($email, $pass) {
	$conn = Connect ();
	$tmp = md5 ( $pass );
	$command = "select email from adm where email like '$email' and password like '$tmp'";
	
	print "ADM :: $command <br/>";
	
	$res = Query ( $command );
	
	$data = mysql_fetch_assoc ( $res );
	if ($data ['email'] == $email) {
		return 1;
	} else {
		return 0;
	}
}
function checkCPF() {
	$conn = Connect ();
}
function validarSessao($POST) {
	if (! (isset ( $POST ['email'] ))) {
		return 0;
	}
	
	return 1;
}
function validarSessao2($VEC, $attr) {
	if (! (isset ( $VEC [$attr] ))) {
		return 0;
	}
	
	return 1;
}
function validarSessaoX($POST, $attr) {
	if (! (isset ( $POST [$attr] ))) {
		return 0;
	}
	
	return 1;
}
function registrarEntrada($id_user) {
}
function getIdByProtocol($proto) {
	$command = sprintf ( "select id from projeto where protocolo like '%s' ", $proto );
	
// 	print ("<br/>getIDbyProto :: " . $command);
	
	$res = Query ( $command );
	$id = "";
	if (! ($res)) {
		print (mysql_error ()) ;
	} else {
		$f = mysql_fetch_array ( $res );
		$id = $f ['id'];
	}
// 	print ("ID == " . $id) ;
	return $id;
}

function generateProtocol($userid) {
	$command = "select (max(id) + 1) from projeto";
	
// 	print ("<br/>generateProto :: " . $command . "<br/>");
	
	$res = Query ( $command );
	$cont = 0;
	if (! ($res)) {
		print (mysql_error ()) ;
	} else {
		$f = mysql_fetch_array ( $res );
		$cont = intval ( $f [0] ) + 1;
	}
	
// 	print ("CONT :: " . $cont) ;
	
	$year = date ( 'Y' );
	$proto = sprintf ( '%s%s', $year, str_pad ( $cont, 4, "0", STR_PAD_LEFT ) );
	
	$command = sprintf ( "insert into projeto (id_researcher, protocolo, status) values ('%s', '%s', 'escrevendo')", $userid, $proto );
	
	print ("<br/>generateProto2 :: "  . $command . "<br/>") ;
	
	$res = Query ( $command );
	
	if (! ($res)) {
		mysql_error ();
		return NULL;
	}
	
	return $proto;
}

function closeProject() {
	if (is_session_started () === FALSE)
		session_start ();
	unset ( $_SESSION ['id'] );
	unset ( $_SESSION ['prot'] );
	
	unset($_SESSION['id']);
// 	print ("OK!") ;
}
	
function is_session_started() {
	if (php_sapi_name () !== 'cli') {
		if (version_compare ( phpversion (), '5.4.0', '>=' )) {
			return session_status () === PHP_SESSION_ACTIVE ? TRUE : FALSE;
		} else {
			return session_id () === '' ? FALSE : TRUE;
		}
	}
	return FALSE;
}


function strlike($str1, $str2) {
	
	if (strtolower($str1) == strtolower($str2))
		return true;
	
	return false;
	
}

// testar se a str2 existe como subsstring de str1
function strlikex($str1, $str2) {

	if (preg_match('/'.$str2.'/i', $str1)){
		return true;
	}
	return false;

}


function hasExpired(){

	if (is_session_started() == FALSE) session_start ();

	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 120)) {
		// last request was more than 30 minutes ago
// 		session_unset();     // unset $_SESSION variable for the run-time
// 		session_destroy();   // destroy session data in storage
		return TRUE;
	}
	
	$_SESSION['LAST_ACTIVITY'] = time();
	return FALSE;

}



?>

