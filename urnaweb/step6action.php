

<?php
include_once 'functions.php';

if (is_session_started () == FALSE) {
	
	session_start ();
}
if (isset ( $_SESSION ["currentstep"] )) {
	
	if (isset ( $_POST )) {
		$indicado1 = $_POST ["consindicado1"];
		$indicado2 = $_POST ["consindicado2"];
		$indicado3 = $_POST ["consindicado3"];
		$indicado4 = $_POST ["consindicado4"];
		$indicado5 = $_POST ["consindicado5"];
		
		$nextstep = $_SESSION ["currentstep"];
		$nextstep = 7;
		
		print ("INDICADO 1 : " . $indicado1 . "<br/>") ;
		print ("INDICADO 2 : " . $indicado2 . "<br/>") ;
		print ("INDICADO 3 : " . $indicado3 . "<br/>") ;
		print ("INDICADO 4 : " . $indicado4 . "<br/>") ;
		print ("INDICADO 5 : " . $indicado5 . "<br/>") ;
		
		$_SESSION ["consindicado1"] = $indicado1;
		$_SESSION ["consindicado2"] = $indicado2;
		$_SESSION ["consindicado3"] = $indicado3;
		$_SESSION ["consindicado4"] = $indicado4;
		$_SESSION ["consindicado5"] = $indicado5;
		$_SESSION ["currentstep"] = $nextstep;
		?>
		<!-- <meta http-equiv="refresh" content="0; url=index.php" /> -->
		<a href="index.php">Goxxxxxxxxxxxxxxxxxx</a>
		<?php
	} else {
	}
} else {
	print ("<br/> Erro de valida&ccedil;&atilde; da Sess&atilde;o. <br/> Inicie a vota&ccedil&atilde;o. <br/>") ;
	unset ( $_SESSION );
	unset ( $_POST );
}
?>

