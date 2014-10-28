

<?php
include_once 'functions.php';
include_once 'connection.php';


if (isset ( $_POST )) {
	$login = $_POST ["matricula"];
	$pass = $_POST ["password"];
	
	
	session_start ();
	
	if (isset ( $_SESSION ["currentstep"] )) {
		
		$nextstep = $_SESSION ["currentstep"];
		
		if (($login == "xx") && ($pass == "xx")) { // validar no LDAP
		
			// save db. verify if this matricula has voted.
		
			$command = sprintf ( "insert into voto (matricula, datahorainicio) values ('%s', now()) ", $login);
			print ($command);
 			
// 			$res = Query ( $command );
			
// 			if ($res){
				
				// se tudo deu ok. continuar.
				$nextstep = 2;
				$_SESSION ["currentstep"] = $nextstep;
				$_SESSION ["matricula"] = $login;
				
				$command = sprintf("select id from voto where matricula like '%s'", $login);
// 				$res = Query ($command);
// 				$id = "";
// 				while ($f = mysql_fetch_assoc($res)){
// 					$id = $f["id"];
// 				}
				
// 			} else {
				
// 				echo ("Erro no insert do BD <br/>");
				
// 			}
			
			?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
		} else {
		}
	} else {
		print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>") ;
		unset ( $_SESSION );
		unset ( $_POST );
	}
} else {
	print ("<br/> Erro de valida&ccedil;&atilde; do login. <br/> Inicie a vota&ccedil&atilde;o. <br/>") ;
	unset ( $_SESSION );
	unset ( $_POST );
}
?>

