
<?php
include_once 'functions.php';

if (is_session_started()==FALSE) {
	
	session_start();
	
}
	
if (isset ( $_SESSION ["currentstep"] )) {
		
		unset ($_SESSION);

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

