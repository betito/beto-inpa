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
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];

$conn = Connect ();

if (! $conn) {
	print ('Ocorreu algum erro na conexão com o Banco de Dados...<br/>') ;
	exit ( 1 );
}

$command = "insert into autor (cpf, nome, email, telefone) values (\"$cpf\", \"$nome\", \"$email\", \"$telefone\");";
$res = Query ( $command );

print ("QUERY = " . $res . "<br/>") ;

if ($res) {
	
	print ("Dados Criados com Sucesso!") ;
	print ("<br/><a href=\"index.php\">Continuar</a>") ;
} else {
	
	print ("Erro na operação: Salvar\n<br/>" . mysql_error ()) ;
}

print ("<br/>") ;

?>
	

	</body>
</html>