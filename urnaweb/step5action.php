

<?php 

include_once 'functions.php';


if (is_session_started()==FALSE) {

	session_start();

}


if(isset($_SESSION["currentstep"])){

	print ("debug 1.... <br/>");
	$nextstep = $_SESSION["currentstep"];
	$nextstep = 6;
	
	$_SESSION["currentstep"]  = $nextstep;
 	?>
	 	<meta http-equiv="refresh" content="0; url=index.php" />
	<?php 
	
}else{
	print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>");
	unset($_SESSION);
}


?>

