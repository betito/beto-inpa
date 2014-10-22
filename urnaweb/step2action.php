

<?php
if (isset ( $_POST )) {
	$indicado1 = $_POST ["indicado1"];
	$indicado2 = $_POST ["indicado2"];
	
	session_start ();
	
	if (isset ( $_SESSION ["currentstep"] )) {
		
		$nextstep = $_SESSION ["currentstep"];
		$nextstep = 3;
		
		print ("INDICADO 1 : " . $indicado1 ."<br/>");
		print ("INDICADO 2 : " . $indicado2 ."<br/>");
		
		$_SESSION["coordindicado1"] = $indicado1;
		$_SESSION["coordindicado2"] = $indicado2;
		$_SESSION ["currentstep"] = $nextstep;
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
?>

