

<?php 


if (isset($_POST)){
$login = $_POST["matricula"];
$pass = $_POST["password"];


session_start();

if(isset($_SESSION["currentstep"])){
	
	$nextstep = $_SESSION["currentstep"];
	
	if (($login == "xx") && ($pass=="xx")){ //validar no LDAP
		$nextstep=2;
		$_SESSION["currentstep"]  = $nextstep;
		$_SESSION["matricula"]  = $login;
	 	?>
	 	<meta http-equiv="refresh" content="0; url=index.php" />
	 	<?php 
	}else {
		
	}
	
	
}else{
	print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>");
	unset($_SESSION);
	unset($_POST);
}

}else{
	print ("<br/> Erro de valida&ccedil;&atilde; do login. <br/> Inicie a vota&ccedil&atilde;o. <br/>");
	unset($_SESSION);
	unset($_POST);
}
?>

