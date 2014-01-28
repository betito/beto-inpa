<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
 
	<title>Solicitação de Ficha Catalográfica</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="demo.css" type="text/css" media="all" />
	
<script type="text/javascript" src="scripts.js">	
    </script>  
</head> 
<body>

<form class="form" action="envia.php" method="post">

	<img src="logos.png" width="500" height="120" /><p><br />
<h1>Solicitação de Ficha Catalográfica</h1><br />
    <h1>Dados do Autor</h1><hr />
    <h2>Vínculo com o INPA</h2>
	 <select name="select">
          <option value="Selecione">Selecione</option>
          
          <option value="Funcionario">Funcionário</option>
          
          <option value="Pesquisador">Pesquisador</option>
          
          <option value="Bolsista">Bolsista</option>
          
          <option value="Al_ME">Aluno de Mestrado</option>
          <option value="Al_DO">Aluno de Doutorado</option>
                    
      </select><p>
                
      
        <label for="name">Nome completo</label><p>
        <input id="name" name="name" class="text" size="60"/><p>   
      
      
        <label for="email">Email</label><p>
        <input id="email" name="email" class="text" /><p>
      
      
      
        <label for="email">Telefone para contato</label><p>
        <input id="email" name="email" class="text" /><p>
        
        <h2>Dados da Publicação</h2><hr /><p>
        
        <INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op1" ><label for="op1">Dissertação</label><p>
		<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op2"><label for="op2">Tese</label><p>
  		<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op3"><label for="op3">Livro</label><p> 
        <INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op4"><label for="op4">Outro:</label><input id="outro" name="outro" class="text" size="60"/><p>
        
        <label for="Titulo">Título</label><p>
        <label>
          <textarea name="texto" id="ttexto" cols=60 rows=10></textarea>
        </label><p>
                
        <label for="local">Local da Publicação (Cidade)</label><p>
        <input id="local" name="local" class="text" /><p>
        
        <label for="editora">Editora (Opcional)</label><p>
        <input id="editora" name="editora" class="text" /><p>
        
        <label for="ano_pub">Ano da Publicação</label><p>
        <input id="ano_pub" name="ano_pub" class="text" /><p>
        
        <label for="num_rom">Número total de folhas ou páginas da numeração romana (
Se houver)</label><p>
        <input id="num_rom" name="num_rom" class="text" /><p>
        
        <label for="num_arabica">Número total de folhas ou páginas da numeração arábica</label><p>
        <input id="num_arabica" name="num_arabica" class="text" /><p>
        
        
        <label for="il_coloridas">Ilustrações coloridas</label><p>
        
        <INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op5"><label for="op5">Sim</label><p>
		<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op6"><label for="op6">Não</label><p>
  		
         <label for="tp_ilust">Tipos de Ilustrações</label><p>
         <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op1"><label for="op1">Gráficos</label>
         <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op2"><label for="op2">Fotografias</label>
         <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op3"><label for="op3">Tabelas</label>
         <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op4"><label for="op3">Mapas</label>
         <INPUT TYPE="checkbox" NAME="OPCAO" VALUE="op5"><label for="op4">Outros:<p></label><input id="outro" name="outro" class="text" size="60"/><p>
         
         
        <label for="orientador">Orientador</label><p>
        <input id="orientador" name="orietnador" class="text" /><p>
        
        <label for="coorientador">Coorientador</label><p>
        <input id="coorientador" name="coorientador" class="text" /><p>
        
        <label for="p_chave">Palavras Chave</label>
        <div id="keywords">

			<input type="text" name="k" class="text2">
			
		</div>
		<input onClick="addButtons('keywords');" type="button"
			value="Adicionar mais Palavras Chaves" /><p>
        
        <label for="sugestao">Sugestão para Assunto Principal</label><p>
        <input id="sugestao" name="sugestao" class="text" /><p>
        
        
        <h2>Dados da Pós-Graduação</h2><hr /><p>
        <label for="instituicao">Instituição do Programa de Pós-Graduação</label><p>
        <INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op7" ><label for="op7">INPA</label><p>
		<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op8"><label for="op8">INPA/UFAM</label><p>
  		<INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op9"><label for="op9">INPA/UEA</label><p> 
        <INPUT TYPE="RADIO" NAME="OPCAO" VALUE="op10"><label for="op10">Outra:</label><input id="outro" name="outro" class="text" size="60"/><p>
        
        
        <label for="programa">Programa de Pós-Graduação</label><p>
	 <select name="select">
          <option value="atu">Agricultura no Trópico Úmido</option>
          
          <option value="aquicultura">Aquicultura</option>
          
          <option value="badpi">Biologia de Água Doce e Pesca Interior</option>
          
          <option value="bot">Botânica</option>
          
          <option value="cft">Ciências de Florestas Tropicais</option>

          <option value="clima">Clima e Ambiente</option>
          
          <option value="ent">Entomologia</option>
          
          <option value="eco">Ecologia</option>
          
          <option value="gen">Genética, Conservação e Biologia Evolutiva</option>
          
          <option value="gapa">Gestão de Áreas Protegidas na Amazônia</option>
                    
      </select><p><br />
      
      
      <label for="linha">Linha de Pesquisa (Indique a linha de pesquisa na qual seu trabalho está inserido)</label><p>
        <input id="linha" name="linha" class="text" /><p>
        
        
        <label for="linha">Resumo (Cole aqui o resumo do seu trabalho)</label><p>
        <textarea name="resumo" cols="64" rows="30"></textarea><br />
        
        
        <div align="center">  
          <p class="submit">
              <input type="submit" value="Enviar" />
          </p>
        
        </div>
    <hr />
    
    <div align="center" >
    	Instituto Nacional de Pesquisas da Amazônia - INPA<br />
        Serviço de Documentação e Informação<br />
        Av. André Araújo, 2.936 - Petrópolis - CEP 69067-375 - Manaus -AM, Brasil<br /> 
Cx. Postal 2223 - CEP 69080-971 - Fone: (92) 3643-3377.
    
    </div>

</form>



</body>
</html>