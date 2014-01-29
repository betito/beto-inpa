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
session_start();
$cpf = $_SESSION ['cpf'];
if (! $cpf) {
	print "Tempo de uso do usuário (CPF): $cpf foi expirado <br/>. \n";
	print "Favor fazer novo loggin.<br/>\n";
	?> <a href="index.php">Login</a>
	<?php
} else {
	
	$email = $_SESSION ['email'];
	$tel = $_SESSION ['tel'];
	$nome = $_SESSION ['nome'];
	
	print "CPF :: $cpf<br/>\n";
	print "Nome :: $nome<br/>\n";
	print "E-mail :: $email<br/>\n";
	print "Telefone :: $tel<br/>\n";
	
	$tipo_vinculo = html_entity_decode(htmlentities($_POST ['tipo_vinculo']));
	$pub = html_entity_decode(htmlentities($_POST ['pub']));
	$titulo = html_entity_decode(htmlentities($_POST ['titulo']));
	$local = html_entity_decode(htmlentities($_POST ['local']));
	$editora = html_entity_decode(htmlentities($_POST ['editora']));
	$ano_pub = html_entity_decode(htmlentities($_POST ['ano_pub']));
	$numrom = intval($_POST ['num_rom']);
	$numara = intval($_POST ['num_ara']);
	$vks = $_POST ['tipo_ilust'];
	$ks = "";
	$i=0;
	for ($i; $i <  count($vks)-1; $i++){
		$ks .= $vks[$i]. ", ";
	}
	$ks .= $vks[$i];
	$tipo_ilus = html_entity_decode(htmlentities($ks));
	$ilust = $_POST ['ilust'];
	$tipo_ilus_outro = html_entity_decode(htmlentities($_POST ['tipo_ilust_outro']));
	$orientador = html_entity_decode(htmlentities($_POST ['orientador']));
	$coorientador = html_entity_decode(htmlentities($_POST ['coorientador']));
	$sugestao = html_entity_decode(htmlentities($_POST ['sugestao']));
	$vks = $_POST ['k'];
	$ks = "";
	$i=0;
	for ($i; $i <  count($vks)-1; $i++){
		$ks .= $vks[$i]. ", ";
	}
	$ks .= $vks[$i];
	$keywords = html_entity_decode(htmlentities($ks));
	$programa = html_entity_decode(htmlentities($_POST ['programa']));
	$programa = html_entity_decode(htmlentities($_POST ['outroprograma']));
	$resumo = html_entity_decode(htmlentities($_POST ['resumo']));
	$linha = html_entity_decode(htmlentities($_POST ['linha_pesq']));
	$outro2 = html_entity_decode(htmlentities($_POST ['outro_pub']));
	$inst_pos = html_entity_decode(htmlentities($_POST ['inst_pos']));
	
	print "VINCULO:<br/><b>$tipo_vinculo </b><br/>\n";
	print "TITULO:<br/><b>$titulo </b><br/>\n";
	print "LOCAL:<br/><b>$local </b><br/>\n";
	print "ANO PUB:<br/><b>$ano_pub </b><br/>\n";
	print "EDITORA:<br/><b>$editora </b><br/>\n";
	print "ANO PUBLIC:<br/><b>$ano_pub </b><br/>\n";
	print "NUM ROMA:<br/><b>$numrom </b><br/>\n";
	print "NUM ARA:<br/><b>$numara </b><br/>\n";
	print "ILUSTRACAO:<br/><b>$ilust </b><br/>\n";
	print "TIPO ILUSTRACAO:<br/><b>$tipo_ilus </b><br/>\n";
	print "ORIENTADOR:<br/><b>$orientador </b><br/>\n";
	print "COORIENTADOR:<br/><b>$coorientador </b><br/>\n";
	print "SUGESTAO:<br/><b>$sugestao </b><br/>\n";
	print "KEYWORDS:<br/><b>$keywords </b><br/>\n";
	print "INSTITUICAO:<br/><b>$inst_pos </b><br/>\n";
	print "PROGRAMA:<br/><b>$programa </b><br/>\n";
	print "LINHA PESQ:<br/><b>$linha </b><br/>\n";
	print "RESUMO:<br/><b>$resumo </b><br/>\n";
	
	$conn = Connect ();
	
	if (! $conn) {
		print ('Ocorreu algum erro na conexão com o Banco de Dados...<br/>') ;
		exit ( 1 );
	}
	
	$command = "insert into questionario1 ";
	$command = $command . "(cpf, vinculo, tipo_pub, outro2, titulo, local, editora, ano, ";
	$command = $command . "total_paginas_romano, total_paginas_arabico, ilustracoes, ";
	$command = $command . "ilustracoes_tipo, orientador, coorientador, keywords, sugestao, ";
	$command = $command . "instituicao, programa_pos, linha_pesquisa, resumo) values (";
	$command = $command . "\"$cpf\", \"$tipo_vinculo\", \"$pub\",";
	$command = $command . "\"$outro2\", \"$titulo\", \"$local\",";
	$command = $command . "\"$editora\", \"$ano_pub\", \"$numrom\",";
	$command = $command . "\"$numara\", \"$ilust\", \"$tipo_ilus\",";
	$command = $command . "\"$orientador\", \"$coorientador\", \"$keywords\",";
	$command = $command . "\"$sugestao\", \"$inst_pos\", \"$programa\",";
	$command = $command . "\"$linha\", \"$resumo\"";
	$command = $command . ");";
	
	print ("COMMAND :: $command<br/>\n");
// 	$res = Query ( $command );
	
// 	if ($res) {
		
// 		print ("Dados Salvos com Sucesso!") ;
// 		print ("<br/><a href=\"index.php\">Continuar</a>") ;
// 	} else {
		
// 		print ("Erro na opera&ccedil&atilde;: Salvar Novo Livro\n<br/>".mysql_error()) ;
// 	}
	
	print ("<br/>") ;
}
?>
	

	</body>
</html>