

<?php
include_once 'functions.php';

if (is_session_started () == FALSE) {
	
	session_start ();
}
if (isset ( $_SESSION ["currentstep"] )) {
	
	if (isset ( $_POST )) {
		$indicado1 = $_POST ["indicado1"];
		$indicado2 = $_POST ["indicado2"];
		
		$nextstep = $_SESSION ["currentstep"];
		$nextstep = 4;
		
		print ("INDICADO 1 : " . $indicado1 . "<br/>") ;
		print ("INDICADO 2 : " . $indicado2 . "<br/>") ;
		
		$_SESSION ["coordindicado1"] = $indicado1;
		$_SESSION ["coordindicado2"] = $indicado2;
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

