

<?php
include_once 'functions.php';

if (is_session_started()==FALSE) {
	
	session_start();
	
}
	
if (isset ( $_SESSION ["currentstep"] )) {
		
		$nextstep = $_SESSION ["currentstep"];
		$nextstep = 8;
		
		print ("INDICADO 1 : " . $_SESSION["consindicado1"] ."<br/>");
		print ("INDICADO 2 : " . $_SESSION["consindicado2"]  ."<br/>");
		print ("INDICADO 3 : " . $_SESSION["consindicado3"] ."<br/>");
		print ("INDICADO 4 : " . $_SESSION["consindicado4"]  ."<br/>");
		print ("INDICADO 5 : " . $_SESSION["consindicado5"] ."<br/>");
		
		$_SESSION ["currentstep"] = $nextstep;
		$_SESSION ["confirmacons"] = "confirma";
		// salvar no bd nesse ponto.
		?>
		<!-- <meta http-equiv="refresh" content="0; url=index.php" /> -->
		<a href="index.php">Goxxxxxxxxxxxxxxxxxx</a>
		<?php

} else {
	print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>") ;
	unset ( $_SESSION );
	unset ( $_POST );
}
?>

