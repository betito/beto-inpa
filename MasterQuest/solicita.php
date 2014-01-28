<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
 
	<title>Solicita&ccedil;&atilde;o de Ficha Catalogr&aacute;fica</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="demo.css" type="text/css" media="all" />
	
<script type="text/javascript" src="scripts.js">	
    </script>  
<script type="text/javascript" src="jquery.js">	
    </script>
</head> 
<body>

<?php
session_start ();
$cpf = $_SESSION ['cpf'];

print ("CPF = $cpf <br/>") ;
?>

<form class="form" action="newAction.php" method="post">

	<img src="logos.png" width="500" height="120" usemap="#Map" border="0" />
    <map name="Map" id="Map">
      <area shape="rect" coords="13,10,165,115" href="http://www.inpa.gov.br" />
      <area shape="rect" coords="179,30,346,113" href="http://ctin.inpa.gov.br" />
      <area shape="rect" coords="360,56,494,115" href="https://www.inpa.gov.br/biblio/biblio.php" />
    </map>
    <p>
  <div class="linha"></div>
<h1>Solicita&ccedil;&atilde;o de Ficha Catalogr&aacute;fica</h1><br />
    <h1>Dados do Autor</h1><hr />
    
    <!-- BLOCO 1:: usar valor que vier do login -->
    	<p>
        <label for="name">Nome completo :: </label>
        <?php 
        print ($_SESSION['nome']); 
        ?> </p>   
      
      	<p>
        <label for="email">Email :: </label>
        <?php 
        print ($_SESSION['email']); 
        ?> </p>
      
      	<p>
        <label for="email">Telefone para contato :: </label>
        <?php 
        print ($_SESSION['telefone']); 
        ?> </p>
      <!-- BLOCO 1:: FIM -->
    
    <h2>V&iacute;nculo com o INPA</h2>
	 <select name="tipo_vinculo">
          <option value="Selecione">Selecione</option>
          <option value="Funcionario">Funcion&aacute;rio</option>
          <option value="Pesquisador">Pesquisador</option>
          <option value="Bolsista">Bolsista</option>
          <option value="Aluno Mestrado">Aluno de Mestrado</option>
          <option value="Aluno Doutorado">Aluno de Doutorado</option>
      </select><p>
        
        <h2>Dados da Publica&ccedil;&atilde;o</h2><hr /><p>
        
        <INPUT TYPE="RADIO" NAME="pub" VALUE="Disserta&ccedil;&atilde;o" >Disserta&ccedil;&atilde;o<p>
		<INPUT TYPE="RADIO" NAME="pub" VALUE="Tese">Tese<p>
  		<INPUT TYPE="RADIO" NAME="pub" VALUE="Livro">Livro<p> 
        <INPUT TYPE="RADIO" NAME="pub" VALUE="Outro">Outro:
        <input id="outro" name="outro2" class="text" size="60"/><p>
        
        <label for="Titulo">T&iacute;tulo</label><p>
        <label>
          <textarea name="titulo" id="ttexto" cols=60 rows=10></textarea>
        </label><p>
                
        <label for="local">Local da Publica&ccedil;&atilde;o (Cidade)</label><p>
        <input id="local" name="local" class="text" /><p>
        
        <label for="editora">Editora (Opcional)</label><p>
        <input id="editora" name="editora" class="text" /><p>
        
        <label for="ano_pub">Ano da Publica&ccedil;&atilde;o</label><p>
        <input id="ano_pub" name="ano_pub" class="text" /><p>
        
        <label for="num_rom">N&uacute;mero total de folhas ou p&aacute;ginas da numera&ccedil;&atilde;o romana (
Se houver)</label><p>
        <input id="num_rom" name="num_rom" class="text" /><p>
        
        <label for="num_ara">N&uacute;mero total de folhas ou p&aacute;ginas da numera&ccedil;&atilde;o ar&aacute;bica</label><p>
        <input id="num_ara" name="num_ara" class="text" /><p>
        
        
        <label for="il_coloridas">Ilustra&ccedil;&otilde;es coloridas</label><p>
        
        <INPUT TYPE="RADIO" NAME="ilust" VALUE="1"><label for="op5">Sim</label><p>
		<INPUT TYPE="RADIO" NAME="ilust" VALUE="0"><label for="op6">N&atilde;o</label><p>
  		
         <label for="tp_ilust">Tipos de Ilustra&ccedil;&otilde;es</label><p>
         <INPUT TYPE="checkbox" NAME="tipo_ilust" VALUE="Graficos"><label for="op1">Gr&aacute;ficos</label>
         <INPUT TYPE="checkbox" NAME="tipo_ilust" VALUE="Fotografias"><label for="op2">Fotografias</label>
         <INPUT TYPE="checkbox" NAME="tipo_ilust" VALUE="Tabelas"><label for="op3">Tabelas</label>
         <INPUT TYPE="checkbox" NAME="tipo_ilust" VALUE="Mapas"><label for="op3">Mapas</label>
         <INPUT TYPE="checkbox" NAME="tipo_ilust" VALUE="Outros"><label for="op4">Outros:<p></label>
         <input id="outro" name="outro" class="text" size="60"/><p>
         
        <label for="orientador">Orientador</label><p>
        <input id="orientador" name="orientador" class="text" /><p>
        
        <label for="coorientador">Coorientador</label><p>
        <input id="coorientador" name="coorientador" class="text" /><p>
        
        <label for="p_chave">Palavras Chave</label>
        <div id="keywords">

			<input type="text" name="k[]" class="text2">
			
		</div>
		<input onClick="addButtons('keywords');" type="button"
			value="Adicionar mais Palavras Chaves" /><p>
        
        <label for="sugestao">Sugest&atilde;o para Assunto Principal</label><p>
        <input id="sugestao" name="sugestao" class="text" /><p>
        
        
        <h2>Dados da P&oacute;s-Gradua&ccedil;&atilde;o</h2><hr /><p>
        <label for="inst_pos">Institui&ccedil;&atilde;o do Programa de P&oacute;s-Gradua&ccedil;&atilde;o</label><p>
        <INPUT TYPE="RADIO" NAME="inst_pos" VALUE="INPA" /><label for="op7">INPA</label><p>
		<INPUT TYPE="RADIO" NAME="inst_pos" VALUE="INPA/UFAM" /><label for="op8">INPA/UFAM</label><p>
  		<INPUT TYPE="RADIO" NAME="inst_pos" VALUE="INPA/UEA" /><label for="op9">INPA/UEA</label><p> 
        <INPUT TYPE="RADIO" id="inst_pos" NAME="inst_pos" VALUE="outra" onclick="mostrarText('inst_pos','outro')"; />
        <label for="op10">Outra:</label><input id="outro" name="outro" class="text" size="60"/><p>
        
        
        <label for="programa">Programa de P&oacute;s-Gradua&ccedil;&atilde;o</label><p>
	 <select name="programa">
          <option value="Agricultura no Tr&oacute;pico &uacute;mido">Agricultura no Tr&oacute;pico &uacute;mido</option>
          <option value="Aquicultura">Aquicultura</option>
          <option value="Biologia de &Aacute;gua Doce e Pesca Interior">Biologia de &Aacute;gua Doce e Pesca Interior</option>
          <option value="Bot&acirc;nica">Bot&acirc;nica</option>
          <option value="Ci&ecirc;ncias de Florestas Tropicais">Ci&ecirc;ncias de Florestas Tropicais</option>
          <option value="Clima e Ambiente">Clima e Ambiente</option>
          <option value="Entomologia">Entomologia</option>
          <option value="Ecologia">Ecologia</option>
          <option value="Genética, Conserva&ccedil;&atilde;o e Biologia Evolutivan">Genética, Conserva&ccedil;&atilde;o e Biologia Evolutiva</option>
          <option value="Gest&atilde;o de &Aacute;reas Protegidas na Amaz&ocirc;nia">Gest&atilde;o de &Aacute;reas Protegidas na Amaz&ocirc;nia</option>
                    
      </select><p><br />
      
      
      <label for="linha_pesq">Linha de Pesquisa (Indique a linha de pesquisa na qual seu trabalho est&aacute; inserido)</label><p>
        <input id="linha" name="linha_pesq" class="text" /><p>
        
        
        <label for="linha">Resumo (Cole aqui o resumo do seu trabalho)</label><p>
        <textarea name="resumo" cols="64" rows="30"></textarea><br />
        
        
        <div align="center">  
          <p class="submit">
              <input type="submit" value="Enviar" />&nbsp; <input type="submit" value="Novo" />&nbsp; <input type="submit" value="Home" />
          </p> 
        </div>
        
        
    <div class="linha_rodape"></div>
    
    <div align="center" >
    	Instituto Nacional de Pesquisas da Amaz&ocirc;nia - INPA<br />
        Servi&ccedil;o de Documenta&ccedil;&atilde;o e Informa&ccedil;&atilde;o<br />
        Av. Andr&eacute; Ara&uacute;jo, 2.936 - Petr&oacute;polis - CEP 69067-375 - Manaus -AM, Brasil<br /> 
		Cx. Postal 2223 - CEP 69080-971 - Fone: (92) 3643-3377.
    
    </div>

</form>



</body>
</html>