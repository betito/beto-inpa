
<?php 

include_once 'functions.php';
?>

<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<title>INPA - VOTA&Ccedil;&Atilde;O - 2014</title>

<link rel="stylesheet" href="./css/urnawebx.css" type="text/css"
	media="all" />


<script type="text/javascript" src="./js/scripts.js">	
    </script>
<script type="text/javascript" src="./js/jquery.js">	
    </script>

</head>
<body>

	<div class="corpo">
		<div class="esquerda">
			<img src="./imgs/inpa.png" class="esquerda" />
		</div>
		<div class="centro">SISTEMA DE VOTA&Ccedil;&Atilde;O</div>
		
		<?php
			if (is_session_started() == FALSE) session_start ();
			
			if (isset ( $_SESSION ["currentstep"] )) {
				$currentstep = $_SESSION ["currentstep"];
				include_once 'votante.inc.php';
			} else {
				$_SESSION ["currentstep"] = 1;
				$currentstep = $_SESSION ["currentstep"];
			}
			
			include_once 'steps.inc.php';
		
		?>

	</div>
	
	<script type="text/javascript">

		hideAll(
		<?php
		print ("\"step" . $currentstep . "\"") ;
		?>);

	</script>

	<?php
	print ("Step = " . $currentstep) ;
	if (isset ( $_SESSION ["coordindicado1"] )) {
		print ("<br/><b>COORD </b><br/>") ;
		print ("<br/>INDICADO 1 :: " . $_SESSION ["coordindicado1"]) ;
		print ("<br/>INDICADO 2 :: " . $_SESSION ["coordindicado2"]) ;
	}
	
	if (isset ( $_SESSION ["consindicado1"] )) {
		print ("<br/><b>CONSELHO </b><br/>") ;
		print ("<br/>INDICADO 1 :: " . $_SESSION ["consindicado1"]) ;
		print ("<br/>INDICADO 2 :: " . $_SESSION ["consindicado2"]) ;
		print ("<br/>INDICADO 3 :: " . $_SESSION ["consindicado3"]) ;
		print ("<br/>INDICADO 4 :: " . $_SESSION ["consindicado4"]) ;
		print ("<br/>INDICADO 5 :: " . $_SESSION ["consindicado5"]) ;
	}
	
	
	
	
	?>
	<br/><br/>
	
	<a href="logout.php">Clear</a>
	
	
	

</body>
</html>

