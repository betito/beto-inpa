

<?php 


$login = "xx";
$pass = "xx";


session_start();

if(isset($_SESSION["currentstep"])){
	
	$nextstep = $_SESSION["currentstep"];
	
	if (($login == "xx") && ($pass=="xx")){
		$nextstep++;
		$_SESSION["currentstep"]  = $nextstep;
	 	?>
	 	<meta http-equiv="refresh" content="0; url=index.php" />
	 	<?php 
	}else {
		
	}
	
	
}else{
	print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>");
	unset($_SESSION);
}


?>

