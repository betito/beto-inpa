<?php
include 'connection.php';
?>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="demo.css" type="text/css" media="all" />

<script type="text/javascript" src="scripts.js">	
	    </script>

</head>
<body>
<?php

$cpf = $_POST ['cpf'];

$conn = Connect ();

if (! $conn) {
	print ('Ocorreu algum erro na conexão com o Banco de Dados...<br/>') ;
	exit ( 1 );
}

$res = Query ( "select cpf, nome, email, telefone from autor where cpf =\"" . $cpf."\"" );

if ($res) {
	
	if (mysql_num_rows ( $res ) == 0) {
		print ('Primeira vez....') ;
		include 'primeiravez.php';
	} else {
		
		while ( $row = mysql_fetch_assoc ( $res ) ) {
			print ('CPF = ' . $row ['cpf'] . '<br/>') ;
			print ('NOME = ' . $row ['nome'] . '<br/>') ;
			print ('E-MAIL = ' . $row ['email'] . '<br/>') ;
			print ('TELEFONE = ' . $row ['telefone'] . '<br/>') ;
			session_start ();
			$_SESSION ['cpf'] = $cpf;
			$_SESSION ['nome'] = $row ['nome'];
			$_SESSION ['tel'] = $row ['telefone'];
			$_SESSION ['email'] = $row ['email'];
		}
		
		?>
	
	<br />
	<div class="botao">
		<a class="abotao" href="new.php">Adicionar (Add)</a>
	</div>
	<div class="botao">
		<a class="abotao" href="">Excluir (Delete)</a>
	</div>
	<br />

	<br />
	<br />
	<div class="list_questionarios">Question&aacute;rios</div>
	<br />
	
	<?php
		$res = Query ( "select cpf, id, titulo as tob from questionario1 where cpf =\"". $cpf ."\"");
		
		while ( $row = mysql_fetch_assoc ( $res ) ) {
			print ('OCORRENCIA = ' . $row ['id'] . '<br/>') ;
			print ('OBRA = ' . $row ['tob'] . '<br/>') ;
			print ('<a class=\"botao2\" href="open.php?id=' . $row ['id'] . '">Abrir</a><br/>') ;
			print ('<a class=\"botao2\" href="delete.php?id=' . $row ['id'] . '">Deletar</a><br/>') ;
			print ('--------<br/>') ;
		}
	}
} else {
}

?>

	</body>
</html>